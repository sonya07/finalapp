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
Auth::routes(); //Auth::routes() is just a helper class that helps you generate all the routes required for user authentication
//localhost:8000/ return view @home is method
Route::get('/', 'ContentsController@home')->name('home');
//localhost:8000/about
Route::view('/about','about/about');

//Functionality connected to the routes - go to the controllers
Route::get('/users', 'UserController@browse')->name('users');
Route::get('/users/print', 'UserController@downloadPDF')->name('print_user');

Route::get('/users/new', 'UserController@newUser')->name('new_user');
Route::post('/users/new', 'UserController@newUser')->name('create_user');
Route::get('/users/{id}', 'UserController@show')->name('show_user');
Route::post('/users/{id}', 'UserController@modify')->name('update_user');
Route::delete('/users/delete/{id}', 'UserController@destroy')->name('delete_user');

Route::get('/guests/export_years', 'GuestsController@years');
Route::get('/guests/browse', 'GuestsController@browse')->name('guests');
Route::post('/guests/export_years', 'GuestsController@export')->name('export_guests');

Route::get('/guests/new', 'GuestsController@newGuest')->name('new_guest');
Route::post('/guests/new', 'GuestsController@newGuest')->name('create_guest');
Route::get('/guests/{id}', 'GuestsController@show')->name('show_guest');
Route::post('/guests/{id}', 'GuestsController@modify')->name('update_guest');


Route::get('form', function(){
    //render app/views/form.blade.php
    return View::make('form');
   });

Route::post('form-submit', array('before'=>'csrf',function(){
//form validation come here
}));

Route::get('/di', 'UserController@di');

Route::get('/facades/db', function () {
    
    return DB::select('SELECT * from users');
});
