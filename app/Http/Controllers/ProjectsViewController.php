<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use DB;

class ProjectsViewController extends Controller
{
    public function index(){
        $projects = DB::select('select * from projects');

        return view('projects_view', ['projects' => $projects]);
    }
    
}
