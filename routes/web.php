<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('test');
// });


// Route::get('/', function () {
//     return view('products');
// });

Route::get('/', [ProductController::class,'products'])->name('products');
Route::POST('/add-product', [ProductController::class,'addProduct'])->name('add.product');
Route::POST('/update-product', [ProductController::class,'updateProduct'])->name('update.product');
Route::POST('/delete-product', [ProductController::class,'deleteProduct'])->name('delete.product');





// ekhane categoriess ta essamoto dete hobe but view er vitor  pager first name dete hobe 
// Route::get('/categoriesss', function () {
//     return view('categories.list');
// });
// eta domain er por /test likte hobe then page pabe
//Route::get('/test', [CategoryController::class,'catfunction']);
// kichu nah dele eta root diretory te jai
// Route::get('', [CategoryController::class,'catfunction']);
// category create hlo url anmee and create holo function jeta controller ekaj korea and name dhore route kori list blad.php theke
// Route::get('/category-create', [CategoryController::class,'create'])->name('amir');
// Route::get('/category-store', [CategoryController::class,'store'])->name('store');