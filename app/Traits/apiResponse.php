<?php

namespace App\Traits;
trait apiResponse {
    public function SeccuessMessage($data){
        return response([
            'status' => true ,
            'data' => $data
        ] , 200);
    }
    public function ErrorMessage($data = 'some thing went worng' , $errorCode = null , $HttpStatusCode = 200){
        return response()->json([
            'status' => false ,
            'message' => $data,
            'Error_Code' => $errorCode,
        ], $HttpStatusCode);
    }


}
