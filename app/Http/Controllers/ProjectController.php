<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use App\Models\Project;
use App\Models\Message;

class ProjectController extends Controller
{
    /**
    * Return all projects
    * 
    * @return use App\Models\Project;
    **/    
    public function index()
    {
        return view('projects/index', [
            'projects' => Project::all()
        ]);
    } 

    /**
    * Return project create form
    * 
    * @return use App\Models\Project; 
    **/
    public function create()
    {
        return view('projects/create');
    }

    /**
    * Return single project
    * 
    * @return use App\Models\Project;
    **/    
    public function show(Project $project)
    {
        return view('projects/show',['project' => $project]);

    }

    /**
    * Store project in database
    * 
    * @return use App\Models\Project;
    **/ 
    public function store(Request $request, Project $project)
    {
        $title = $request->input('title');
        $author = $request->input('author');
        $description = $request->input('description');
        $status = $request->input('status');

        $data = array('title'=>$title,'author'=>$author,'description'=>$description, 'status'=>$status);

        Project::insert($data);

        return redirect()
            ->route('projects.index');                    
    }
}
