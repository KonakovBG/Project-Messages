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

/*
 * Projects
 */
Route::get('/projects', 'ProjectController@index')
    ->name('projects.index');

Route::get('/projects/create', 'ProjectController@create')
    ->name('projects.create');

Route::post('/projects', 'ProjectController@store')
    ->name('projects.store');

Route::get('/projects/{project}', 'ProjectController@show')
    ->name('projects.show');

/*
 * Messages
 */
Route::get('/messages', 'MessageController@index')
    ->name('messages.index');

// Route::get('/messages/{message}', 'MessageController@show')
//     ->name('messages.show');

Route::get('/messages/create', 'MessageController@create')
    ->name('messages.create');

Route::post('/messages', 'MessageController@store')
    ->name('messages.store');

/*
 * ToDoEs
 */

Route::get('/todoes', 'TodoController@index')
    ->name('todoes.index');

Route::get('/todoes/create', 'TodoController@create')
    ->name('todoes.create');

Route::post('/todoes', 'TodoController@store')
    ->name('todoes.store');

Route::get('/todoes/{todo}', 'TodoController@show')
    ->name('todoes.show');

Route::post('/todoes/{todo}', 'TodoController@update')
    ->name('todoes.update');
