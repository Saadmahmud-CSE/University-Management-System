<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    function AddDepartment(Request $req){
        $department = new Department; //model name
        $department -> id=$req->id;
        $department -> dept_name=$req->dept_name;
        $department ->save();

        if($department->save()){
          echo 'Department Successfully Inserted';
      }
      }
}
