<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', function (){
    return view('inicio');
})->name('inicio');

Route::get('/pdf','AdministratorController@autogeneratePDF')->name('pdf');
Route::post('/pdf','AdministratorController@autogeneratePDF')->name('pdf');

Route::get('/cuatro','AdministratorController@vistacuatro')->name('vercuatro');
Route::post('/cuatro','AdministratorController@vistacuatro')->name('vercuatro');

Route::get('/temas','AdministratorController@vistatemas')->name('vertemas');
Route::post('/temas','AdministratorController@vistatemas')->name('vertemas');