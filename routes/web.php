<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\NhacungcapController;


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
    return view('login');
});


Route::get('admin/login',[AdminController::class,'index']);
Route::get('/admin/products/list',[NhacungcapController::class,'index']);

Route::resource('nhacungcap', NhacungcapController::class);

// Route::middleware('check')->group(function (){
//     Route::get('/ad', [LoginController::class, 'index'])->name('test');
//     Route::get('/a/main', [LoginController::class, 'index']);
// });

// Route::prefix('/adm')->name('ad.')->group(function(){
//     Route::get('/', [LoginController::class, 'index'])->name('admin');
//     Route::get('/main', [LoginController::class, 'index'])->name('add');
// });
// Route::prefix('ad')->group(function () {

//     Route::get('/', [AdminController::class, 'index'])->name('admin')->middleware('checkuser');
//     Route::get('/main', [AdminController::class, 'index']);
// });

// Route::get('admin/login', [LoginController::class, 'index'])->name('login')->middleware('checkuser');
// Route::post('admin/users/login/store', [LoginController::class, 'store'])->middleware('checkuser');