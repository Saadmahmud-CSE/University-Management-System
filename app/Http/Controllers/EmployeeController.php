<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        DB::table('employees')->insert([
            'name' => $req->name,
            'position' => $req->position,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);
        echo 'Successfully Inserted';
    }
    public function all(){
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }
    public function update($id, Request $req){
        $obj = Employee::find($id);
        $obj->name= $req->name;
        $obj->position= $req->position;
        $obj->email= $req->email;
        $obj->phone= $req->phone;
        if($obj->save()){
         return redirect('employees');
        }
    }

    public function delete($id){
        Employee::find($id)->delete();
        return redirect('employees');
    }

}
