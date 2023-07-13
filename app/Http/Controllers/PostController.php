<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
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

    // お問い合わせページの作成機能
    public function inquiry(Request $request) {
        $inquiry = new Inquiry();
        $inquiry->name = $request->input('name');
        $inquiry->telphone = $request->input('telphone');
        $inquiry->mail = $request->input('mail');
        $inquiry->content = $request->input('content');
        $inquiry->save();

        return redirect()->route('posts.contact')->with('flash_message', '予約が完了致しました。控えのメールは予約当日まで大事に保管をお願いいたします。');
    }
}

