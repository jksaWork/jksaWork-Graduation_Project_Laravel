<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Attachments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttachmentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'attachments' => 'required',
            'agent_id' => 'required',
        ]);
        $agent = Agent::find($request->agent_id);
        // dd($agent);
        foreach ($request->attachments  as $key => $file) {
            $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('agents/attachments/' . $request->emp_id), $file_name);
            $attachment = new Attachments();
            $attachment->url = $file_name;
            $agent->attachments()->save($attachment);
        }
        return redirect()->route('agent.show', ['agent' => $request->agent_id])->with(['success' => 'done']);
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
        // dd($url);
        $pathToFile = Storage::disk('public')->getAdapter()->applyPathPrefix( 'agents/attachments/' .$file_name);
        return response()->file($pathToFile);
    }

    public  function download($id)
    {
        $file_name = Attachments::find($id)->url;
        $pathToFile = Storage::disk('public')->getAdapter()->applyPathPrefix($file_name);
        return response()->download($pathToFile);
    }
}
