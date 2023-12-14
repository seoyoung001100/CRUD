<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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

// 메인 페이지 라우터
Route::get('/', [PostController::class, 'index' ])->name('index');
Route::get('/create', [PostController::class, 'create' ])->name('create');
Route::get('/update', [PostController::class, 'update' ])->name('update');
Route::get('/read', [PostController::class, 'read' ])->name('read');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
