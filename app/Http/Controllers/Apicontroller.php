<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class Apicontroller extends Controller
{
    public function create(Request $request)
    {
       $student = new Student();
       $student->fName = $request->input('fName');
        $student->lName = $request->input('lName');
        $student->address = $request->input('address');
        $student->password = $request->input('password');

        $student ->save();
        return response()->json($student);
    }
}
