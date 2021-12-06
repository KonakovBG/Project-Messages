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
    public function index(){
        return view('projects/index', [
            'projects' => Project::all()
        ]);
    } 

    public function create(){
        return view('projects/create');
    }
    
    public function show(Project $project){
        return view('projects/show',['project' => $project]);

    }

    public function store(Request $request, Project $project){
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
