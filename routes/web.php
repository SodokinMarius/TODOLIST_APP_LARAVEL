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
/*
Route::get('/', function () {
    return view('index');
});*/
Route::get("home",[App\Http\Controllers\TaskController::class,'index'])->name('home');
Route::post("home",[App\Http\Controllers\TaskController::class,'store'])->name("store");
Route::get("home\{id}\delete",[App\Http\Controllers\TaskController::class,'destroy'])->name("delete");
Route::get('home\{id}\edit',[App\Http\Controllers\TaskController::class,'edit'])->name('edit');
Route::get('home\deleteAll',[App\Http\Controllers\TaskController::class,'deleteAll'])->name('deleteAll');
Route::get('home\deleteDone',[App\Http\Controllers\TaskController::class,'deleteDone'])->name('deleteDone');

