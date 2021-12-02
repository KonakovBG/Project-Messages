<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use DB;

class InsertMessageController extends Controller
{
    public function insertForm(){
        return view('insert_message');
    }
    
    public function formData(Request $request){
        $project_id = $request->input('project_id');
        $author = $request->input('author');
        $content = $request->input('content');

        $data = array('project_id'=>$project_id,'author'=>$author,'content'=>$content);

        DB::table('messages')->insert($data);

        echo "Record inserted successfully.<br/>";         
    }
}
