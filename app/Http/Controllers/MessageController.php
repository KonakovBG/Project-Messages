<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use App\Models\Message;
use App\Models\Project;

class MessageController extends Controller
{   
    /**
    * Return all messages 
    * 
    * @return use App\Models\Message;
    **/
    public function index()
    {
        return view('messages/index', [
            'messages' => Message::all()
        ]);  
    }

    /**
    * Return message create form 
    * 
    * @return use App\Models\Message;
    **/
    public function create()
    {
        return view('messages/create');
    }

    /**
    * Store message in database
    * 
    * @return use App\Http\Controllers\InsertProjectController;
    **/
    public function store(Request $request, Project $project)
    {
        $project_id = $request->input('project_id');
        $author = $request->input('author');
        $content = $request->input('content');

        $data = array('project_id'=>$project_id,'author'=>$author,'content'=>$content);

        Message::insert($data); 

        return redirect()
            ->route('messages.index');    
    }
}
