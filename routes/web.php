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

Route::get('/', 'EmployeeCtrl@index') -> name('index');
//show
Route::get('/showMeThisEmp/{id}', 'EmployeeCtrl@show') -> name('emp-show');
Route::get('/showMeThisEmp/{id}', 'EmployeeCtrl@show') -> name('emp-show');
// delete
Route::get('/showMeThisEmp/delete/{id}', 'EmployeeCtrl@destr') -> name('emp-delete');
// edit
Route::get('/showMeThisEmp/edit/{id}', 'EmployeeCtrl@edit') -> name('emp-edit');
Route::post('/showMeThisEmp/update/{id}', 'EmployeeCtrl@update') -> name('emp-update');
//create
Route::get('/create/emp', 'EmployeeCtrl@create') -> name('emp-create');
Route::post('/create/emp', 'EmployeeCtrl@store') -> name('emp-store');
