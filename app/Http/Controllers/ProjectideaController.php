<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectideaController extends Controller
{
    function AddIdea(Request $req){
        $idea = new Project; //model name
        $idea -> id=$req->id;
        $idea -> department=$req->department;
        $idea -> section=$req->section;
        $idea -> project_name=$req->project_name;
        $idea -> project_idea=$req->project_idea;
        $idea -> save();
        if($idea->save()){
          echo 'Project Proposal Successfully Inserted';
        }
      }
}
