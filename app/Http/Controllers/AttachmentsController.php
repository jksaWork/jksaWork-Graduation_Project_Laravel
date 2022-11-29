<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Attachments;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AttachmentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'attachments' => 'required',
            'agent_id' => 'required',
        ]);
        $attachmentable = Agent::find($request->agent_id) ?? Offer::find($request->agent_id);
        // dd($agent);
        foreach ($request->attachments  as $key => $file) {
            $file_name =  $file->hashName();
            $file->store('offers/attachments',  'public');
            $attachment = new Attachments();
            $attachment->url = $file_name;
            $attachmentable->attachments()->save($attachment);
        }
        $route = 'agent.show';
        $routeKey = 'agent';
        if($attachmentable instanceof Offer) {
            $route ='offers.show';
            $routeKey = 'offer';
        }
            return redirect()->route($route, [$routeKey => $request->agent_id])->with(['success' => 'done']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmpAtatchment  $empAtatchment
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmpAtatchment  $empAtatchment
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmpAtatchment  $empAtatchment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attach = Attachments::find($id);
        // Storage::delete(' $pathToFile ');
        $pathToFile = Storage::disk('Attachment')->getAdapter()->applyPathPrefix($attach->employee_id . '\\' . $attach->file_name);
        $attach->delete();
        return redirect()->route('employee.show', $attach->employee_id)->with(['success' => 'done']);
    }


    public  function show($id)
    {
        $file_name = Attachments::find($id)->url;
        if(Str::startsWith($file_name, 'http://localhost:8000/'))
            $file_name = Str::replaceFirst('http://localhost:8000/' ,  '' , $file_name);

        $pathToFile = Storage::disk('public')->getAdapter()->applyPathPrefix($file_name);
        return response()->file($pathToFile);
    }

    public  function download($id)
    {
        $file_name = Attachments::find($id)->url;
        if(Str::startsWith($file_name, 'http://localhost:8000/'))
            $file_name = Str::replaceFirst('http://localhost:8000/' ,  '' , $file_name);
        $pathToFile = Storage::disk('public')->getAdapter()->applyPathPrefix($file_name);
        return response()->download($pathToFile);
    }
}
