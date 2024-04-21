<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//اطلاعات کاربران
Route::group(["prefix" => "users", "as" => "users."], function () {
    Route::get('list', [UserController::class, 'list'])->name('list');
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::group(["prefix" => "products", "as" => "products."], function () {
    Route::get('list', [ProductController::class, 'list'])->name('list');
    Route::post('create', [ProductController::class, 'create'])->name('create');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});




Route::group(
    ["prefix" => "orders", "as" => "orders."],
    function () {
        Route::get('list', [OrderController::class, 'list'])->name('list');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('update');
        Route::post('create', [OrderController::class, 'create'])->name('create');
        Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
    }

);