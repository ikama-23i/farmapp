<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Inquiry;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
        $now = Carbon::now();
        $events = Event::where("startDay", "<", $now)->where("endDay", ">", $now)->get();
        $calendars = [];// 連想配列にしたい {"さくらんぼ狩り2023" => Eventオブジェクト, }
        foreach( $events as $event){
            $calendars[$event->name] = $event;
        }
        // return view('posts.harvest', ['events' => $events]);
        return view('posts.harvest', compact('events', 'calendars'));

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
        $request->validate([
            'name' => 'required',
            'telphone' => 'required',
            'mail' => 'required|email',
            'content' => 'required',
        ]);
        $inquiry = new Inquiry();
        $inquiry->name = $request->input('name');
        $inquiry->telphone = $request->input('telphone');
        $inquiry->mail = $request->input('mail');
        $inquiry->content = $request->input('content');
        $inquiry->save();

        return redirect()->route('posts.contact')->with('flash_message', 'お問い合わせ内容を送信完了いたしました。');
    }


// 予約フォームの作成機能（送信） コメントアウト
public function book(Request $request) {
    $request->validate([
        'name' => 'required',
        'furigana' => 'required',
        'people' => 'required|max:10',
        'tel' => 'required',
    ]);
    $book = new Book();
    $book->name = $request->input('name');
    $book->furigane = $request->input('furigana');
    $book->people = $request->input('people');
    $book->child = $request->input('tel');
    $book->save();

    return redirect()->route('posts.harvest')->with('flash_message','予約が完了いたしました。');

}
}