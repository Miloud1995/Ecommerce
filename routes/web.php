<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/redirect',[HomeController::class,'redirect']);
    Route::get('/view_category',[AdminController::class,'view_category']);
    Route::post('/add_category',[AdminController::class,'add_category']);
    Route::post('/delete_category/{id}',[AdminController::class,'delete_category'])->name('delete_category');
    Route::post('/edit_category/{category_name}/{id}',[AdminController::class,'edit_category'])->name('edit_category');
    Route::post('/update_category/{id}',[AdminController::class,'update_category'])->name('update_category');


    // products     products     products     products     products


    Route::get('/show_product',[AdminController::class,'show_product'])->name('show_product');
    Route::get('/add_product',[AdminController::class,'add_product'])->name('add_product');
    Route::post('/save_product',[AdminController::class,'save_product'])->name('save_product');
    Route::get('/edit_product/{id}',[AdminController::class,'edit_product'])->name('edit_product');
    Route::post('/update_product{id}',[AdminController::class,'update_product'])->name('update_product');
    Route::post('/delete_product/{id}',[AdminController::class,'delete_product'])->name('delete_product');


    Route::get('/add_cart/{id}',[HomeController::class,'add_cart'])->name('add_cart');


});


Route::get('/product_details/{id}',[HomeController::class,'product_details'])->name('product_details');




