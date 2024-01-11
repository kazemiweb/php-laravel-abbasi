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

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact-form', function () {
    return view('form.send');
});
Route::get('edit-form', function () {
    return view('form.edit');
});
Route::get('list-form', function () {
    return view('form.list');
});
Route::get('information-user', function () {
    return view('users.information');
});
Route::get('edit-user', function () {
    return view('users.edit');
});
Route::get('list-user', function () {
    return view('users.list');
});
