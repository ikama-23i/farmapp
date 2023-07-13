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
Route::get('/', [PostController::class,'index'])->name('posts.index');

Route::get('/about', [PostController::class, 'about'])->name('posts.show');

Route::get('/contact', [PostController::class, 'contact'])->name('posts.contact');

// 果物狩り予約サイトへ
Route::get('/harvest', [PostController::class, 'harvest'])->name('posts.harvest');

// お問い合わせページへ
Route::get('/contact', [PostController::class, 'contact'])->name('posts.contact');

// お知らせページへ
Route::get('/news', [PostController::class, 'news'])->name('posts.news');

// お問い合わせページの作成機能
Route::post('/contact', [PostController::class, 'inquiry'])->name('posts.inquiry');