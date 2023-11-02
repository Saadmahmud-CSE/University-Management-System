<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    function AddSession(Request $req){
      $session = new Session; //model name
      $session -> id=$req->id;
      $session -> session=$req->session;
      $session -> session_type=$req->session_type;
      $session -> save();

      if($session->save()){
        echo 'Session Successfully Inserted';
      }
    }
}
