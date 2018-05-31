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
    //return view('welcomel');
    return view('auth.login');
});

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::post('users/active_deactive', 'UserController@activeDeactive')->name('users.active_deactive');
    Route::post('users/change_role', 'UserController@changeRole')->name('users.change_role');
    Route::get('users', 'UserController@index')->name('superadmin');
    
//   });  

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/admin', 'AdminController@index')->name('admin');
//Route::get('/users', 'SuperAdminController@index')->name('superadmin');

Route::get('rating/{id}', [

    'uses' => 'RatingController@create'
])->name('create');

Route::resources([
    //'users' => 'UserController',

    'form' => 'EmptyFormController',
    'form/9/row' => 'RowController',
    'row' => 'RowController',
    'cell' => 'CellController',
    'rating' => 'RatingController',
    'score' => 'scoreController',
    'list' => 'ListController'
]);
Route::any('/search', 'RatingController@search');

