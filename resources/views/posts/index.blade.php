@extends('layouts.app')

@section('title', 'Ikoma農園')

  @section('content')
    <article>
      <section class="firstsentens">
        <p>Ikoma農園のサイトに足を運んでいただき、ありがとうございます。</p>
        <p>元農家の趣味で育てていた果樹などが立派に育ち、美味しい果実たちがありがたいことに毎年たくさん実ります。小さい農園ですが、より美味しい果物たちをお届けできるよう丹精込めて育てております。</p>
        <p id="caution">個人で切り盛りしておりますので、果物狩り【予約】は現時点では土曜日、日曜日毎に二組様までとさせていただきます。ご了承のほどお願いいたします。</p>
      </section>
      <!-- 果物狩り -->
      <section id="fruits">
        <p class="hedsentence">Ikoma農園で楽しむ果物狩り</p>
        <div class="fruits-harvest">
          <div class="fruits-harvestchild">
            <img src="./img/lemon.jpg" alt="レモンの絵" class="fruits1">
            <p>レモン狩り</p>
            <p>収穫時期が限られる希少なグリーンレモンもございます。<br>ぜひご賞味ください。 </p>
          </div>
          <div class="fruits-harvestchild">
            <img src="./img/cherries.jpg" alt="サクランボの絵" class="fruits1">
            <p>サクランボ狩り</p>
            <p>甘酸っぱさと見た目のかわいらしさ <br>安定の人気果物です。</p>
          </div>
          <div class="fruits-harvestchild">
            <img src="./img/persimmon.jpg" alt="柿の絵" class="fruits1">
            <p>柿狩り</p>
            <p>食感がしっかりしてるもの、完熟した甘い果汁ととろける果肉など <br>さまざまな食感をこの機会に味わってみてください。</p>
          </div>
          <div class="fruits-harvestchild">
            <img src="./img/orange.jpg" alt="ミカンの絵" class="fruits1">
            <p>ミカン狩り</p>
            <p>焼きミカン、サラダなどに是非。 <br>様々な食べ方があります。</p>
          </div>
        </div>
      </section>

      <!-- 果物たち -->
      <section id="">
        <p class="hedsentence">Ikoma農園の果物たち</p>
        <div class="parentfruits">
          <div class="childfruits">
            <!-- レモン -->
            <div class="icondescription">
            <div>
              <img src="./img/lemonicon.png" alt="レモンの画像" class="iconpic">
            </div>
            <div>
              <h3>レモン</h3>
              <p>ビタミンCがたっぷり!!国内産レモンが今注目されています。</p>
            </div>
          </div>
            <!-- ミカン -->
            <div class="icondescription">
            <div>
              <img src="./img/orangeicon.png" alt="ミカンの画像" class="iconpic">
            </div>
            <div>
              <h3>ミカン</h3>
              <p>甘みがしっかりあるジューシーなミカン</p>
            </div>
          </div>
            <!-- サクランボ -->
            <div class="icondescription">
            <div>
              <img src="./img/cherriesicon.png" alt="サクランボの画像" class="iconpic">
            </div>
            <div>
              <h3>サクランボ</h3>
              <p>初夏の旬の味。</p>
            </div>
          </div>
            <!-- 柿 -->
            <div class="icondescription">
            <div>
              <img src="./img/persimmonicon.png" alt="柿の画像" class="iconpic">
            </div>
            <div>
              <h3>柿</h3>
              <p>なかなか食べる機会が少ない果物の柿。<br> この機会にいかがですか？</p>
            </div>
          </div>
            <hr>

            <div>
              <p>【⇩~~COMING SOON~~⇩】<br>現在、生産量が安定するまで丹精込めて育てております。<br> 収穫などのご案内の際には <a href="./news.html"> お知らせ</a>にて掲載いたします。<br>しばらくお待ちくださいませ。
              </p>
            </div>
            <!-- タケノコ -->
            <div class="icondescription">
            <div>
              <img src="./img/bambooicon.png" alt="タケノコの画像" class="iconpic">
            </div>
            <div>
              <h3>タケノコ</h3>
              <p>日本を代表する春の味覚！！</p>
            </div>
          </div>
            <!-- ブドウ -->
            <div class="icondescription">
            <div>
              <img src="./img/grapeicon.png" alt="ブドウの画像" class="iconpic">
            </div>
            <div>
              <h3>ブドウ</h3>
              <p>世界中で親しまれている果実。 <br>お子様も大人も大人気！</p>
            </div>
          </div>
          </div>
          <div class="childfruits">
            <img src="./img/harvest-time2.png" alt="収穫のカレンダー">
          </div>
        </div>
        <!-- ↑パ連とフルーツのdiv閉めタグ -->
      </section>


    </article>
  
@endsection
@section('footer')
@include('layouts.topfooter')
@endsection