<?php

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
use App\Http\Controllers\SanphamController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/sanpham',[SanphamController::class,'index']);
Route::get('/admin/sanpham/{id}/show',[SanphamController::class,'show']);
Route::get('/admin/sanpham/{id}/delete',[SanphamController::class,'destroy']);
Route::post('/admin/sanpham/update',[SanphamController::class,'update']);

Route::get('/category' , function () {
    return view('category');
});
Route::get('/khachhang' , function () {
    return view('khachhang');
});
Route::get('/nhanvien' , function () {
    return view('nhanvien');
});
Route::get('/new' , function () {
    return view('new');
});
Route::get('/sanphamNB' , function () {
    return view('sanphamNB');
});
Route::get('/donhang' , function () {
    return view('donhang');
});
Route::get('/tintuc' , function () {
    return view('tintuc');
});
Route::get('/nhacungcap' , function () {
    return view('nhacungcap');
});
Route::get('/index' , function () {
    return view('user.index');
});
Route::get('/cart' , function () {
    return view('user.checkout');
});
Route::get('/contact' , function () {
    return view('user.contact');
});
Route::get('/chitietsp' , function () {
    return view('user.details');
});
Route::get('/register' , function () {
    return view('user.register');
});
Route::get('/women' , function () {
    return view('user.women');
});
Route::get('/donghonam' , function () {
    return view('user.donghonam');
});
Route::get('/login' , function () {
    return view('user.login');
});

