<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InsertProjectController;
use DB;

class InsertProjectController extends Controller
{
    public function insertForm(){
        return view('insert_project');
    }
    
    public function formData(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $description = $request->input('description');
        $status = $request->input('status');

        $data = array('title'=>$title,'author'=>$author,'description'=>$description, 'status'=>$status);

        DB::table('projects')->insert($data);

        echo "Record inserted successfully.<br/>";                 
    }
}
