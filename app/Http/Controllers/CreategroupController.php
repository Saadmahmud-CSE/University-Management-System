<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class CreategroupController extends Controller
{
    function AddTeam(Request $req){
        $team = new Group; //model name
        $team -> team_member=$req->team_member;
        $team -> member_1_id=$req->member_1_id;
        $team -> member_1_name=$req->member_1_name;
        $team -> member_2_id=$req->member_2_id;
        $team -> member_2_name=$req->member_2_name;
        $team -> member_3_id=$req->member_3_id;
        $team -> member_3_name=$req->member_3_name;
        $team -> save();
        if($team->save()){
          echo 'Group Member Successfully Inserted';
        }
      }
}
