<?php

use App\Http\Controllers\RepliesController;
use App\Http\Controllers\ThreadsController;
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


Route::get('/threads',[ThreadsController::class,'index'])->name('threads.index');
Route::get('/thread/create',[ThreadsController::class,'store']);
Route::get('/threads/{channel}',[ThreadsController::class,'index']);
Route::get('/threads/{channel}/{thread}',[ThreadsController::class,'show'])->name('threads.show');
Route::post('/threads/{channel}/{thread}/replies',[RepliesController::class,'store']);



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
