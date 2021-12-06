<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Project;

class TodoController extends Controller
{
    public function index(){
        return view('todoes/index',[
            'todoes' => Todo::all()
        ]);
    }

    public function create(){
        return view('todoes/create');
    }

    public function show(Todo $todo){
        return view('todoes/show',['todoes' => $todo]);

    }

    public function store(Request $request, Todo $todo){
        $project_id = $request->input('project_id');
        $title = $request->input('title');
        $author = $request->input('author');
        $content = $request->input('content');
        $status = $request->input('status');

        $data = array('project_id'=>$project_id,'title'=>$title,'author'=>$author,'content'=>$content,'status'=>$status);

        Todo::insert($data);

        return redirect()
            ->route('todoes.index');
                     
    }

    public function update(Request $request, Todo $todo){
        $todo->update([
            'status' => 'finished'
        ]);

        return redirect()
            ->route('projects.index');
    }
}
