<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\ProductType;

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

/*  Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login/store',[LoginController::class,'store']);
//Route::get('/home/add',[HomeController::class,'index']);
//Route :: middleware(['auth'])->group(function(){
    Route::prefix('home')->group(function(){
        Route::get('/',[HomeController::class,'index'])->name('home');
        //Route::get('main',[HomeController::class,'index']);
       Route::prefix('loaisanpham')->group(function(){
        Route::get('add',[ProductTypeController::class,'create'])->name('addproducttype');
        Route::post('store',[ProductTypeController::class,'store'])->name('storeproducttype');
        Route::get('view',[ProductTypeController::class,'index'])->name('viewproducttype');
        Route::get('edit/{id}',[ProductTypeController::class,'edit'])->name('editproducttype');
        Route::post('edit',[ProductTypeController::class,'update1'])->name('updateProducttype');
        Route::get('delete/{id}',[ProductTypeController::class,'destroy1'])->name('deleteproducttype');
    });
    Route::prefix('sanpham')->group(function(){
        Route::get('add',[ProductController::class,'create'])->name('addproduct');
        Route::post('store',[ProductController::class,'store'])->name('storeproduct');
        Route::get('view',[ProductController::class,'index'])->name('viewproduct');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('editproduct');
        Route::post('edit',[ProductController::class,'update2'])->name('updateProduct');
        Route::get('delete/{id}',[ProductController::class,'destroy1'])->name('deleteproduct');
    });
    Route::prefix('invoice')->group(function(){
        Route::get('detail/{id}',[InvoiceController::class,'create'])->name('detailInvoive');
        //Route::post('store',[InvoiceController::class,'store'])->name('storeproduct');
        Route::get('view',[InvoiceController::class,'index'])->name('viewinvoice');
        Route::get('edit/{id}',[InvoiceController::class,'edit'])->name('editInvoice');
        Route::post('edit',[InvoiceController::class,'update2'])->name('updateInvoice');
        Route::post('search',[InvoiceController::class,'search'])->name('searchInvoice');
        //Route::get('delete/{id}',[InvoiceController::class,'destroy1'])->name('deleteproduct');
    });

    });
//});

//Route::resource('producttype',ProductTypeController::class);

