<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //一覧ページ
    public function index() {
        return view('posts.index');
    }

    // ikoma農園について
    public function about() {
        return view('posts.show');
    }

    // 果物狩り予約サイトについて
    public function harvest() {
        return view('posts.harvest');
    }


    // お問い合わせページについて
    public function  contact() {
        return view('posts.contact');
    }

    // お知らせページについて
    public function  news() {
        return view('posts.news');
    }
}

