<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
//اطلاعات کاربران
Route::group(['prefix' => 'users'], function () {
    Route::get('information', [UserController::class, 'informationuser']);
    Route::get('edit', [UserController::class, 'edit']);

    Route::get('list', [UserController::class, 'list']);
});
