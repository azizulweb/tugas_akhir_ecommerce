<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailprodukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function (){
//     return view('layout.home');
// });



// Route::get('/login',  [LoginController::class, 'admin'])->name('user.layout.login');

Route::get('/',  [UserController::class, 'home'])->name('layout.home');

Route::post('/register',  [LoginController::class, 'register'])->name('registrasi');


Route::get('/login',  [LoginController::class, 'login'])->name('layout.login');

Route::post('/proses-login',  [LoginController::class, 'authentivikasi']);

Route::get('/produk/{id}', [ProductController::class, 'show']);

Route::get('/user/produk', [ProductController::class, 'product'])->name('user.product');

Route::get('/admin/produk', [ProductController::class, 'productadmin'])->name('user.product');

Route::get('/user',   [UserController::class, 'user'])->name('user.user');


Route::get('/detail', [DetailprodukController::class, 'detail'])->name('user.detail.detail');

Route::get('/detail/{category}', [DetailprodukController::class, 'bycategory'])->name('user.detail.category');



Route::get('/order/{id}',   [DetailprodukController::class, 'show'])->name('order.product');

Route::post('/checkout',   [OrderController::class, 'checkout'])->name('checkout');

Route::get('/order',   [OrderController::class, 'show'])->name('user.DataOrder');

Route::get('/DataOrder-admin',   [OrderController::class, 'DataPembelian'])->name('user.DataAdmin');

Route::get('/DataOrder/{id}',   [OrderController::class, 'pembelian'])->name('user.DataOrder');




Route::get('/admin/EditData/{id}',   [OrderController::class, 'edit'])->name('admin.EditData');

Route::put('/updatepesanan/{id}',  [OrderController::class, 'update'])->name('update.pesanan');


Route::delete('/hapuspesanan',  [OrderController::class, 'destroy'])->name('hapuspesanan');

Route::delete('/batalpesanan',  [OrderController::class, 'delete'])->name('batalpesanan');


Route::get('/tambahproduk',   [ProductController::class, 'create'])->name('tambahproduk');

Route::post('/simpanproduk',   [ProductController::class, 'store'])->name('simpanproduk');


Route::post('/logout',   [LoginController::class, 'logout'])->name('logout');



