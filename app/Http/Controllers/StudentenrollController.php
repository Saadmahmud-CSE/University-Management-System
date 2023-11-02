<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentenrollController extends Controller
{
    function AddStudent(Request $req){
        $student = new Student; //model name
        $student -> id=$req->id;
        $student -> name=$req->name;
        $student -> email=$req->email;
        $student -> department=$req->department;
        $student -> batch=$req->batch;
        $student -> address=$req->address;
        $student -> contact_number=$req->contact_number;
        $student -> save();
        if($student->save()){
          echo 'Student Information Successfully Inserted';
        }
      }
}
