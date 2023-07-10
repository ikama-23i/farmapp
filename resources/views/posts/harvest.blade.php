@extends('layouts.app')

@section('title', 'Ikoma農園-果物狩り【予約】')

@section('content')



<article>
  <!-- 予約の注意事項 -->
  <section>
    <h3>ご予約について確認事項</h3>
    <ul>
      <li>果物狩りは土曜日、日曜日... [午前:10:30-12:30/午後:13:00-15:00]に分かれて営業しております。</li>
      <li>午前、午後どちらも二組までの少数体制でご予約承っております。【一組あたり7名様まで】</li>
      <li>キャンセルの場合はご予約のお時間前までにお電話にてお願いいたします。</li>
      <li>当日はお車にてIkoma農園の駐車場（無料）にお越しいただき、お支払い後に収穫の説明をさせていただき、収穫をしていただく流れになります。</li>
      <!-- <li></li> -->
    </ul>
  </section>
  <!-- サクランボ狩り -->
  <section class="cherryharvest">
    <p>サクランボ狩り</p>
    <div class="availability">
      <p>空き状況</p>
      <table align="center">
        <tr>
          <th>6/17(土曜日)</th>
          <th>6/18(日曜日)</th>
          <th>3/24(土曜日)</th>
          <th>6/25(日曜日)</th>
        </tr>
        <tr>
          <th>○</th>
          <th>◎</th>
          <th>○</th>
          <th>✕</th>
        </tr>
        </thead>

      </table>
    </div>

    <form action="" id="harvestform">
      <label for="day">日付：</label>
      <input type="date">
      <br>
      <label for="time">時間：</label>
      <select name="time" id="">
        <option value="amtime">午前10:30-12:30</option>
        <option value="pmtime">午後13:00-15:00</option>
      </select>
      <br>
      <label for="name">代表氏名：</label>
      <input type="name" placeholder="山田太郎">様
      <br>
      <label for="furigana">ふりがな：</label>
      <input type="furigana" placeholder="やまだたろう">さま
      <br>
      <label for="adult">大人：</label>
      <input type="number" style="width: 20px;">名
      <label for="child">子供：</label>
      <input type="number" style="width: 20px;">名
      <br>
      <label for="tel">電話番号：</label>
      <input type="tel" placeholder="〇〇〇-〇〇〇-〇〇〇">
      <br>
      <br>
      <button type="submit">予約する</button>
    </form>
  </section>

  <!-- 柿狩り -->
  <div class="harvestfruitscoming">
    <p>柿狩り</p>
    <p>COMING SOON</p>
    <p>2023年9月～11月の予定です。しばらくお待ちください。</p>
  </div>
  <!-- ミカン狩り -->
  <div class="harvestfruitscoming">
    <p>ミカン狩り</p>
    <p>COMING SOON</p>
    <p>2023年10月～12月の予定です。しばらくお待ちください。</p>
  </div>
  <!-- レモン狩り -->
  <div class="harvestfruitscoming">
    <p>レモン狩り</p>
    <p>COMING SOON</p>
    <p>2023年10月～12月の予定です。しばらくお待ちください。</p>
  </div>
</article>

@endsection
@section('footer')
@include('layouts.footer')
@endsection