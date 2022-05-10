<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tasks\TaskController;


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

Route::get('/', 'Tasks\TaskController@index');
Route::get('/create', 'Tasks\TaskController@create');
Route::post('/store-data', 'Tasks\TaskController@store');
Route::get('/details/{task}', 'Tasks\TaskController@details');
Route::get('/delete/{task}', 'Tasks\TaskController@delete');
Route::get('/edit/{task}', 'Tasks\TaskController@edit');
Route::post('/update/{task}', 'Tasks\TaskController@update');
