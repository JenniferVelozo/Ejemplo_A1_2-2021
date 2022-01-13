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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'SubjectController@index');
Route::get('/editarcurso', 'SubjectController@editarCurso');
Route::get('/ingresarcurso', function () {
    return view('ingresarcurso');
});

//Subjects
Route::get('/subjects', 'SubjectController@index');
Route::get('/subjects/{id}', 'SubjectController@show');
Route::post('/subject/create', 'SubjectController@store');
Route::put('/subject/update', 'SubjectController@update');
Route::delete('/subject/delete/{id}', 'SubjectController@destroy');
