<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use DB;

class MessagesViewController extends Controller
{
    public function index(){
        $messages = DB::select('select * from messages');

        var_dump($messages);
 
        return view('messages_view', ['messages' => $messages]);  
    }    
}
