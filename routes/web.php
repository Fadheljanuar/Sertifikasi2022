<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',function (){
    return view('layouts/app');
});


// admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/adminaccess',[\App\Http\Controllers\adminController::class,'index'])->name('adminaccess');
    Route::resource('/createbuku',\App\Http\Controllers\ControllerBuku::class);
    Route::get('/editadmin/{id}',[\App\Http\Controllers\ControllerBuku::class,'edit']);
    Route::Patch('/editadmin/{id}',[\App\Http\Controllers\ControllerBuku::class,'update']);
    Route::Delete('/adminaccess/{id}',[\App\Http\Controllers\ControllerBuku::class,'destroy']);
    Route::get('/pinjambuku/createpinjambuku',[\App\Http\Controllers\PinjamanbukuController::class,'create']);
    Route::post('/pinjambuku/createpinjambuku',[\App\Http\Controllers\PinjamanbukuController::class,'store']);
    Route::resource('/pinjambuku/indexpinjambuku',\App\Http\Controllers\PinjamanbukuController::class);
    Route::patch('/pinjambuku/indexpinjambuku/{id}', [\App\Http\Controllers\PinjamanbukuController::class,'update']);


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

