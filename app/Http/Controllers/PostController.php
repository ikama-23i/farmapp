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
}

