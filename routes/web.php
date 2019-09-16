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
// Route::get('mypage/{name?}/{id?}', function ($name="Name",$id="24") {
//     return "<h1> $name</h1>"." "."<h1> $id</h1>";
//     // return view('welcome');
// });


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', "TestingController@index");