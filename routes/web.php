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

//Route::get('/','PagesController@index');
//Route::Resources('',PagesController);


Route::get('/project','PagesController@index');
Route::get('/project/{id}/show/','PagesController@show');
Route::get('/project/create','PagesController@create');
Route::post('/project/store','PagesController@store');
Route::get('/project/{id}/edit/','PagesController@edit');
Route::patch('/project/{id}/update/','PagesController@update');
Route::delete('/project/{id}/destroy/','PagesController@destroy');


Route::patch('/tasks/{id}','ProjectTaskController@update');
// Route::get('/','PagesController@index');
// Route::get('/create', 'PagesController@create');
// Route::get('/show/{id}','PageController@show');
// Route::post('/store','PageController@store');
// Route::get('/edit/{id}', 'PageController@edit');
// Route::patch('/update/{id}','PageController@update');
// Route::delete('/delete/{id}','PageController@destroy');


// Route::get('/about','PagesController@about');
// Route::get('/products','PagesController@products');
// Route::get('/country', 'PagesController@country');
// Route::post('/projects', 'PagesController@store');


// Route::get('/', function () {
//     return view('home');
// });
