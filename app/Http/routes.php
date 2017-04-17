<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "Hello";
//    return view('welcome');
});

Route::get('layout', function () {
    return view('layouts');
});
Route::get('user',function (){
    return "user";
});

Route::any('stu','DBController@stu');
Route::any('pdo', ['uses' => 'DBController@pdo']);
Route::any('query2', ['uses' => 'DBController@query2']);
Route::any('query3', ['uses' => 'DBController@query3']);
Route::any('query4', ['uses' => 'DBController@query4']);



Route::any('section1', ['uses' => 'BladeController@section1']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    return "aa";
    //
});
