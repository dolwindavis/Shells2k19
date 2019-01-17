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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

//Route::get('/home','ViewController@homeview');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/student', function () {
    return view('studentlist');
});

Route::get('/student/update', function () {
    return view('studentupdate');
});
Route::get('/events/list', function () {
    return view('eventlist');
});
Route::get('/events/details', function () {
    return view('eventdetails');
});


