@extends('layouts.app')

@section('title', 'Ikoma農園-お知らせ')
@section('linktag')
<link rel="stylesheet" href="./css/news.css">
@endsection
@section('content')

<section class="news">
  
<h2>お知らせ</h2>
    <br>

    <article id="article-news4">
    <dl>
      <dt>2023.9.1</dt>
      <dd id="newspersimmon">柿狩りの予約を開始しました。</dd>
      <div id="newspersimmoncoment"> 大変お待たせ致しました。 <br>柿狩りの予約が可能になりました。10月までの予約を開放しております。<br><a href="{{ route('posts.harvest') }}">果物狩り【予約】</a> へご予約をお待ちしております。</div>
    </dl>
    </article>

    <article id="article-news5">   
    <dl>
      <dt>2023.8.31</dt>
      <dd id="newscherryend">今年度（2023年）のサクランボ狩りは終了致しました。</dd>
      <div id="newscherrycomentend">今年も多くのお客様にご利用いただき、ありがとうございました。<br>来年度（2024年）は6～7月の予定です。<br> </div>
    </dl>
    </article>

    <article id="article-news">   
    <dl>
      <dt>2023.6.20</dt>
      <dd id="newscherry">サクランボ狩りの予約を開始しました。</dd>
      <div id="newscherrycoment">大変お待たせ致しました。 <br>初夏の旬の味のサクランボが今年も立派に育ちました。<br><a href="{{ route('posts.harvest') }}">果物狩り【予約】</a> へご予約をお待ちしております。</div>
    </dl>
    </article>

    <article id="article-news2">
    <dl>
      <dt>2023.3.25</dt>
      <dd id="newsbamboo">たけのこ期間限定販売</dd>
      <div id="newsbamboocoment">今年は期間限定で、果物狩りに来園いただきましたお客様限定でタケノコの販売をさせていただきました。 <br>ご好評につき、完売いたしました。ありがとうございます。 <br>次の販売は来年の2024年2～4月ごろの予定になります。</div>
    </dl>
    </article>


    <article id="article-news3">
    <dl>
      <dt>2023.1.23</dt>
      <dd id="newslemon">レモン狩り終了のお知らせ</dd>
      <div id="newslemoncoment">今年のレモン狩りは終了いたしました。 <br>次のレモン狩りは来年2024年10月～1月ごろの予定になります。 <br>グリーンレモンという希少のレモンについてもお知らせに掲載いたします。 <br>さまざまな果物たちと同様に楽しみにお待ちください。 </div>
    </dl>
  </article>

</section>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
@section('script')
<script src="./js/news.js"></script>
@endsection