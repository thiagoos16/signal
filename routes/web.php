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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mainAnalyticalStudent', 'HomeController@showViewAnalyticalStudent')->name('mainAnalyticalStudent');
Route::get('/analyticalStudentByArea', 'HomeController@showViewAnalyticalStudentByArea')->name('analyticalStudentByArea');
Route::get('/analyticalStudentByDisciplina', 'HomeController@showViewAnalyticalStudentByDisciplina')->name('analyticalStudentByDisciplina');

Route::get('/analyticalByTurmas', 'HomeController@showViewAnalyticalTurmas')->name('analyticalByTurmas');
Route::get('/analyticalByTurma01', 'HomeController@showViewAnalyticalTurma01')->name('analyticalByTurma01');
Route::get('/analyticalByMetrica', 'HomeController@showViewAnalyticalMetrica')->name('analyticalByMetrica');
Route::get('/analyticalByAvaliacaoMetrica', 'HomeController@showViewAnalyticalAvaliacaoMetrica')->name('analyticalByAvaliacaoMetrica');
