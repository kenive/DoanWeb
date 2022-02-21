<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
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

Route::get('danh-muc',[APIController::class,'layDanhMuc']);
Route::get('sanpham',[APIController::class,'sanPham']);
Route::get('sanpham/loai/{idloaisanpham}',[APIController::class,'sanPhamid']);
Route::get('sanpham/new/{id}',[APIController::class,'sanPhamnew']); 
Route::get('account/{username}/{password}',[APIController::class,'account']);
Route::post('account/register',[APIController::class,'register']);
Route::get('account/{name}',[APIController::class,'checkname']);
Route::get('login/{name}',[APIController::class,'accountname']);
Route::post('login',[APIController::class,'login']);
Route::put('account/update/{id}',[APIController::class,'update']);
Route::put('account/editpassword/{id}',[APIController::class,'editpassword']);
Route::post('addcart',[APIController::class,'addcart']);
Route::post('remove',[APIController::class,'removeCart']);
Route::get('getcart/{id}',[APIController::class,'getCart']);
Route::delete('deletecart/{id}',[APIController::class,'deleteCart']);
Route::post('invoice',[APIController::class,'invoice']);

Route::get('invoice/{id}/{status}',[APIController::class,'getInvoice']);
Route::put('invoice/updatestatus/{id}',[APIController::class,'updateStatus']);
Route::get('getinvoicedetail/{id}',[APIController::class,'getInvoicedetail']);
Route::get('gethd/{id}',[APIController::class,'getHoaDon']);
Route::get('prod/{id}',[APIController::class,'getd']);
Route::get('mualai/{id}',[APIController::class,'mualai']);
