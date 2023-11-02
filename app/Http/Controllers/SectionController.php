<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    function AddSection(Request $req){
        $section = new Section; //model name
        $section -> id=$req->id;
        $section -> session=$req->session;
        $section -> semester=$req->semester;
        $section -> course_name=$req->course_name;
        $section -> course_code=$req->course_code;
        $section -> section_name=$req->section_name;
        $section -> course_teacher=$req->course_teacher;
        $section -> save();
  
        if($section->save()){
          echo 'Section Successfully Inserted';
        }
    }
}
