<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function AddCourse(Request $req){
        $course = new Course; //model name
        $course -> id=$req->id;
        $course -> semester=$req->semester;
        $course -> course_name=$req->course_name;
        $course -> course_type=$req->course_type;
        $course -> course_credit=$req->course_credit;
        $course -> save();
        if($course->save()){
          echo 'Course Successfully Inserted';
      }
      }
}
