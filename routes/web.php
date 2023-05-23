<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ProductController::class,'index']);
Route::get('/add-product',[ProductController::class,'Products'])->name('Products');
Route::post('/add-product',[ProductController::class,'addProducts'])->name('addProducts');
Route::get('/edit-product/{id}',[ProductController::class,'editView'])->name('editView');
Route::post('/edit-product/{id}',[ProductController::class,'update'])->name('update');
Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');
