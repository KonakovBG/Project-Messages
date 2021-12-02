<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use DB;

class ProjectController extends Controller
{
    public function show($project){
        $id = intval($project);

        $project_single = DB::select(DB::raw("SELECT * FROM projects where id = :id"),array('id' => $id));

        $project_messages = DB::select(DB::raw("SELECT * FROM messages where project_id = :id"),array('id' => $id));

        return view('single_project', ['project_single' => $project_single], ['project_messages' => $project_messages]);   
    }
}
