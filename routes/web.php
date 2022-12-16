<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $review = DB::table('vreview')->get();
    return view('admin/home',compact('review'));
});

Route::get('/index',[UserController::class,'indexPage']);
Route::get('beli/{id}',[UserController::class,'beliPage']);
Route::get('about',[UserController::class,'aboutPage']);
Route::get('blog_list',[UserController::class,'blog_listPage']);
Route::get('contact',[UserController::class,'contactPage']);
Route::get('ourstory',[UserController::class,'ourstoryPage']);
Route::get('product',[UserController::class,'productPage']);

Route::resource('admin/produklist', 'App\Http\Controllers\Admin\produklistController');
Route::resource('admin/pengguna', 'App\Http\Controllers\Admin\penggunaController');
Route::resource('admin/pesanan', 'App\Http\Controllers\Admin\pesananController');
Route::resource('admin/stokproduk', 'App\Http\Controllers\Admin\stokprodukController');
Route::resource('admin/invoice', 'App\Http\Controllers\Admin\invoiceController');
Route::resource('admin/customer_review', 'App\Http\Controllers\Admin\customer_reviewController');
Route::get('admin/invoice/cetak_pdf', 'App\Http\Controllers\Admin\invoiceController@cetak_pdf');
