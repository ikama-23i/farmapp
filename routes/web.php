<?php

use Illuminate\Support\Facades\Route;
// ルーティングを設定するコントローラを宣言
use App\Http\Controllers\PostController;

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



// Ikoma農園ホームページ
Route::get('/', [PostController::class,'index']);

Route::get('/about', [PostController::class, 'about'])->name('posts.show');