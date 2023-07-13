@extends('layouts.app')

@section('title', 'Ikoma農園-アクセス・お問い合わせはこちらから')

@section('content')


<body>
    


  <!-- 住所＆地図 -->
  <div class="address">
    <div>
      <h2>アクセス</h2>
      <p id="border">Ikoma農園</p>
      <p>
        <strong>住所</strong> <br> 愛知県津島氏新明町1
      </p>
      <p>
        <strong>電話番号</strong> <br>０５６７-２６-３２１６ <br>営業時間外は対応できない場合がございます。<br> ご了承のほどお願いいたします。
      </p>
      <p>
        <strong>営業時間</strong> <br>火曜日～日曜日 <br>午前[10:30~12:00] <br> 午後[13:00~16:00]
      </p>
    </div>

    <div>
      <h2>周辺地図</h2>
      <p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13044.562731515776!2d136.718627!3d35.178046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600398f283bf0e47%3A0x52c29405c3b4f0!2z5rSl5bO256We56S-!5e0!3m2!1sja!2sjp!4v1686642477466!5m2!1sja!2sjp"
          width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </p>
    </div>
  </div>
  <hr>
  <!-- お問い合わせフォーム -->
  <div class="contact">
    <h1>
      お問い合わせ
    </h1>
    <form action="{{ route('posts.inquiry') }}"  method="post">
      @csrf
      <label for="name">氏名</label>
      <br>
      <input type="text" placeholder="山田太郎" name="name">
      <br>
      <label for="tel">電話番号</label>
      <br>
      <input type="text" placeholder="〇〇〇-〇〇〇-〇〇〇" name="telphone">
      <br>
      <label for="mail">メールアドレス</label>
      <br>
      <input type="text" placeholder="〇〇＠example.co.jp" name="mail">
      <br>
      <label for="contact">お問い合わせ内容</label>
      <br>
      <textarea name="content" id="" cols="30" rows="5"></textarea>
      <br>
      <br>
      <p>内容をお確かめの上、「送信ボタン」を押してください。</p>
      <input type="reset" value="リセットする">
      <button type="submit">送信する</button>
    </form>
  </div>
  
</body>
@endsection
  @section('footer')
@include('layouts.footer')
@endsection