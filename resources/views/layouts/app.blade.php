<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="株式会社Ikoma農園サイトになります。果物たちの収穫体験してみませんか。">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <header>
    <div class="nav">
    <a href="./index.html"><img src="./img/ikomalogo.jpg" alt="Ikoma農園のロゴマーク" id="toplogo"></a>
    <nav>
      <!-- <a href="./fruits.html">農園の果物</a> -->
      <a href="{{ route('posts.show') }}">Ikoma農園について</a>
      <a href="./harvest.html">果物狩り【予約】</a>
      <a href="./contact.html">お問い合わせ</a>
      <a href="./news.html">お知らせ</a>
    </nav>
  </div>
  </header>


  <main>
    @yield("content")
  </main>


  @yield('footer')
  <script src="./js/index.js"></script>
</body>

</html>