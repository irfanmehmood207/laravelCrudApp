<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/userList', 'UserController@index');
Route::get('/editUserDataRequest/{id}', 'UserController@edit');
Route::get('/storingEditUserDataRequest/{id}', 'UserController@store');
Route::get('/destroy/{id}', 'UserController@destroy');
Route::get('/register',function () {
    return view('auth.register');
});
Route::POST('/storingUserSignUp', 'UserController@storingUserSignUp');
Route::get('/logOut', 'SessionController@logOut');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
