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
//pages
Route::group(["prefix" => "users", "as" => "users."], function () {
    Route::get('createpage', [UserController::class, 'createpage'])->name('createpage');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::get('list', [UserController::class, 'list'])->name('list');
    //
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
});