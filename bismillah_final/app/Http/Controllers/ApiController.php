<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editnilai(Request $request,$id)
    {
        // return $request->all();
        $student = Student::find($id);
        
        $student->subject()->updateExistingPivot($request->pk,['nilai'=>$request->value]);


    }
}
