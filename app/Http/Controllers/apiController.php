<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class apiController extends Controller
{
    function addData(Request $req){
        $student=new Student;
        $student->name=$req->name;
        $student->roll=$req->roll;
        $student->class=$req->class;
        $student->save();

        return "data has added";
    }
    function getData(){
       return $student=Student::all();
    }
}
