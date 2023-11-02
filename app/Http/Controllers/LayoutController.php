<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function studentenroll(){
        return view('admin.pages.studentenroll');
    }
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function users(){
        return view('admin.pages.users');
    }
    public function forms(){
        return view('admin.pages.forms');
    }
    public function tables(){
        return view('admin.pages.tables');
    }
    public function sections(){
        return view('admin.pages.sections');
    }
    public function sessions(){
        return view('admin.pages.sessions');
    }
    public function departments(){
        return view('admin.pages.departments');
    }
    public function courses(){
        return view('admin.pages.courses');
    }
}
