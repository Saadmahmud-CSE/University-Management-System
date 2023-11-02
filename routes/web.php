<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentenrollController;
use App\Http\Controllers\ProjectideaController;
use App\Http\Controllers\CreategroupController;

//Enroll Part
Route::get('admin/studentenroll',function(){
    return view('admin.pages.studentenroll');
});
Route::post('/add-student',[StudentenrollController::class, 'AddStudent']);

//Project idea Part
Route::get('admin/projectidea',function(){
    return view('admin.pages.projectidea');
});
Route::post('/add-idea',[ProjectideaController::class, 'AddIdea']);

//Project idea Part
Route::get('admin/createteam',function(){
    return view('admin.pages.createteam');
});
Route::post('/add-team',[CreategroupController::class, 'AddTeam']);

//Layout Part
Route::get('admin/dashboard', [LayoutController::class, 'dashboard']);
Route::get('admin/form', [LayoutController::class, 'forms']);
Route::get('admin/tables', [LayoutController::class, 'tables']);
Route::get('admin/sessions', [LayoutController::class, 'sessions']);
Route::get('admin/departments', [LayoutController::class, 'departments']);
Route::get('admin/sections', [LayoutController::class, 'sections']);
Route::get('admin/courses', [LayoutController::class, 'courses']);

//Auth Part
Route::get('admin/register',[AuthController::class, 'register']);
Route::post('admin/create-user',[AuthController::class, 'createUser']);
Route::get('admin/login',[AuthController::class, 'login']);
Route::post('admin/user-login',[AuthController::class, 'userLogin']);

//Session Part
Route::get('admin/sessions',function(){
    return view('admin.pages.sessions');
});
Route::post('/add-session',[SessionController::class, 'AddSession']);
//Department Part
Route::get('admin/departments',function(){
    return view('admin.pages.departments');
});
Route::post('/add-dept',[DepartmentController::class, 'AddDepartment']);
//Section Part
Route::get('admin/sections',function(){
    return view('admin.pages.sections');
});
Route::post('/add-sec',[SectionController::class, 'AddSection']);
//Course Part
Route::get('admin/courses',function(){
    return view('admin.pages.courses');
});
Route::post('/add-course',[CourseController::class, 'AddCourse']);

//User Part
Route::middleware(['CheckLoggedIn'])->group(function () {
    Route::get('admin/users',[UserController::class, 'allUsers']);
    Route::get('admin/approve/{userId}', [UserController::class, 'approve']);
    Route::middleware(['IsStudent'])->group(function () {
       Route::get('admin/my-courses', function(){
            return 'you are student';
       });
    });
    Route::middleware(['IsTeacher'])->group(function () {
        Route::get('admin/give-marks', function(){
            return 'you are teacher';
       });
    });
});

//Teacher Part
Route::get('create-teacher',[TeacherController::class, 'create']);

//Employee Part
Route::get('/create-employee', [EmployeeController::class, 'create']);
Route::post('/store-employee', [EmployeeController::class, 'store']);
Route::get('employees', [EmployeeController::class, 'all']);
Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::post('/update-employee/{id}', [EmployeeController::class, 'update']);
Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);