<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('about', [HomeController::class, 'showAbout']);

Route::get('profil', [HomeController::class, 'showProfil']);

Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('login', [AuthController::class, 'showLogin']);

Route::get('pelanggan', [HomeController::class, 'showPelanggan']);

Route::get('supplier', [HomeController::class, 'showSupplier']);

Route::get('produk', [ProdukController::class, 'index']);

Route::get('produk/create', [ProdukController::class, 'create']);

Route::post('produk', [ProdukController::class, 'store']);

Route::get('produk/{produk}',[ProdukController::class, 'show']);

Route::get('produk/{produk}/edit',[ProdukController::class, 'edit']);

Route::put('produk/{produk}', [ProdukController::class, 'update']);

Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


Route::get('/layout', function () {
    return view("admin.layout");
});
Route::get('/about2', function () {
    return view("about2");
});
Route::get('/profil2', function () {
    return view("profil2");
});
Route::get('/produk2', function () {
    return view("produk2");
});
Route::get('/kategori2', function () {
    return view("kategori2");
});
Route::get('/login2', function () {
    return view("login2");
});