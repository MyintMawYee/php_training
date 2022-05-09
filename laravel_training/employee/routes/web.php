<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employees\EmployeeController;

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

Route::get('/', 'Employees\EmployeeController@index');
Route::get('/create', 'Employees\EmployeeController@create');
Route::post('/store-data', 'Employees\EmployeeController@store');
//Route::get('/details/{employee}', 'Employees\EmployeeController@details');
Route::get('/delete/{employee}', 'Employees\EmployeeController@delete');
Route::get('/edit/{employee}', 'Employees\EmployeeController@edit');
Route::post('/update/{employee}', 'Employees\EmployeeController@update');

Route::get('/export', 'Employees\EmployeeController@export')->name('export');
Route::post('/import', 'Employees\EmployeeController@import')->name('import');
