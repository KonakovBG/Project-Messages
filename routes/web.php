<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/insert_project','InsertProjectController@insertForm');
Route::post('/insert_project','InsertProjectController@formData');

Route::get('/projects_view','ProjectsViewController@index');
Route::get('/messages_view','MessagesViewController@index');

Route::get('/insert_message','InsertMessageController@insertForm');
Route::post('/insert_message','InsertMessageController@formData');