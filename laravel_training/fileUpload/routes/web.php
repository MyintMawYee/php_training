<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Files\FileController;

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

Route::get('/', 'Files\FileController@index')->name('file.index');
Route::post('/', 'Files\FileController@store')->name('file.store');
Route::get('/{id}/delete', 'Files\FileController@destory')->name('file.destory');
Route::get('/{id}/download', 'Files\FileController@download')->name('file.download');
