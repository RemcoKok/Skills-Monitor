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

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');


//For the 'create rubrick' page

// ->middleware('auth')

// Route::resources([
//     'form' => 'formsController',
//     'form/create' => 'formsController'
// ]);

// Route::resource('form', 'formsController', ['names' => [
//     'form' => 'form.index',
//     'create' => 'form.create'
// ]]);

Route::get('form', 'formsController@index');
Route::post('form/create', 'formsController@create');

//to store items in the forms database
Route::post('/forms', 'formsController@store');