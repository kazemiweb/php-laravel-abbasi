<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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
    //methode
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
});

//product
//page
Route::group(["prefix" => "products", "as" => "products."], function () {
    Route::get('createpage', [ProductController::class, 'createpage'])->name('createpage');
    Route::get('list', [ProductController::class, 'list'])->name('list');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    //methode
    Route::post('create', [ProductController::class, 'create'])->name('create');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

//order
Route::group(["prefix" => "orders", "as" => "orders."], function () {
    //page
        Route::get('createpage', [OrderController::class, 'createpage'])->name('createpage');
        Route::get('list', [OrderController::class, 'list'])->name('list');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('edit');

        //methode
        Route::post('update/{id}', [OrderController::class, 'update'])->name('update');
        Route::post('create', [OrderController::class, 'create'])->name('create');
        Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');


    }

);