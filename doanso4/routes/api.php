<?php
use App\Http\Controllers\API\LoaispController;
use App\Http\Controllers\API\KhachhangController;
use App\Http\Controllers\API\nhanvienController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\sanphamNBController;
use App\Http\Controllers\API\donhangController;
use App\Http\Controllers\API\tintucController;
use App\Http\Controllers\API\nhacungcapController;


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
Route::resource('categories' ,LoaispController::class);
Route::resource('khachhangs' ,KhachhangController::class);
Route::resource('nhanviens' ,NhanVienController::class);
Route::resource('news' ,NewsController::class);
Route::resource('sanphamNBs' ,sanphamNBController::class);
Route::resource('donhangs' ,donhangController::class);
Route::resource('tintucs' ,tintucController::class);
Route::resource('nhacungcaps' ,nhacungcapController::class);
Route::get('chitietsp/{id}',[sanphamNBcontroller::class,'show']);