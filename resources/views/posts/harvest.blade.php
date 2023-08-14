@extends('layouts.app')

@section('title', 'Ikoma農園-果物狩り【予約】')
@section('linktag')
<link rel="stylesheet" href="./css/harvest.css">
@endsection
@section('content')



<article>
  <!-- 予約の注意事項 -->
  <section id="checklist">
    <h3>ご予約について確認事項</h3>
    <ul>
      <li>果物狩りは土曜日、日曜日... [午前:10:30-12:30/午後:13:00-15:00]に分かれて営業しております。</li>
      <li>午前、午後どちらも二組までのご予約を承っております。</li>
      <li>キャンセルの場合はご予約のお時間前までにお電話にてお願いいたします。</li>
      <li>当日はお車にてIkoma農園の駐車場（無料）にお越しいただき、お支払い後に収穫の説明をさせていただき、収穫をしていただく流れになります。</li>
      <!-- <li></li> -->
    </ul>
  </section>

    
    @if (session('flash_message'))
        <p class="booking">{{ session('flash_message') }}</p>
    @endif

    @if ($errors->any())
    <div>
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <!-- サクランボ狩り -->
  <section class="cherryharvest">
            
    @foreach($calendars as $key => $calender)
    <h1>{{$key}}</h1>
    <h1>8月（土日のみ）</h1>
    <table class="calender">
      <tr class="clender_header">
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
      </tr>
      @for($i=0;;$i++)
        @if($calender->startDay->startOfMonth()->addDay($i)->dayOfWeek == 0 || $i == 0)
          <tr>
        @endif
        @if($i == 0)
          @for($j = $calender->startDay->startOfMonth()->addDay($i)->dayOfWeek; $j > 0; $j--)
            <td></td>
          @endfor
        @endif
            <td>
              <div class="day">
                @if(!in_array($calender->startDay->startOfMonth()->addDay($i)->dayOfWeek, str_split((string)($calender->holiday))))
                  <p>{{$calender->startDay->startOfMonth()->addDay($i)->day}}</p>
                  <input type="hidden" value="{{$calender->startDay->startOfMonth()->addDay($i)->format('Y/m/d')}}">
                  <div class="morning"><input type="radio" name="time" value="1" form="harvestform"><label for="">午前</label></div>
                  <div class="afternoon"><input type="radio" name="time" value="2" form="harvestform"><label for="">午後</label></div>
                @else
                  <p>{{$calender->startDay->startOfMonth()->addDay($i)->day}}</p>
                  <p>お休み</p>
                @endif
              </div>
            </td>
        @if($calender->startDay->startOfMonth()->addDay($i) >= $calender-> endDay)
          @break
        @endif
        @if($calender->startDay->startOfMonth()->addDay($i)->dayOfWeek == 6)
          </tr>
        @endif
      @endfor
    </table>
    @endforeach

    @if ($errors->any())
    <div>
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.book') }}" method="post" id="harvestform">
      @csrf  
      
      <input type="hidden" name="day">
      <br>
      <!-- <label for="ampm">ampm</label>
      <input type="text" name="ampm" value="{{ old('ampm') }}"> -->

      <br>
      <label for="name">代表氏名：</label>
      <input type="name" placeholder="山田太郎" name="name" value="{{ old('name') }}">様
      <br>
      <label for="furigana">ふりがな：</label>
      <input type="furigana" placeholder="やまだたろう" name="furigana" value="{{ old('furigana') }}">さま
      <br>
      <label for="people">人数：&emsp;&emsp;</label>
      <input type="number" style="width: 40px;" name="people" value="{{ old('people') }}" >名
      
      <br>
      <label for="tel">電話番号：</label>
      <input type="tel" placeholder="〇〇〇-〇〇〇-〇〇〇" name="tel" value="{{ old('tel') }}">
      <br>
      <br>

      <label for="event_id">event_id</label>
      <input type="text" name="event_id" value="{{ old('event_id') }}">

      <br>
      <input type="reset" value="リセット" class="reset">
      &emsp;
      <button type="submit" class="submit">送信する</button>
    </form>
  </section>

  <br>
  <hr>
  <br>
  <!-- 柿狩り -->
  <div class="harvestfruitscoming">
    <p>柿狩り</p>
    <p>～COMING SOON～</p>
    <p>現時点では予約を承っておりません。</p>
    <p>2023年9月～11月の予定です。しばらくお待ちください。</p>
  </div>
  <br>
  <!-- ミカン狩り -->
  <div class="harvestfruitscoming">
    <p>ミカン狩り</p>
    <p>～COMING SOON～</p>
    <p>現時点では予約を承っておりません。</p>
    <p>2023年10月～12月の予定です。しばらくお待ちください。</p>
  </div>
  <br>
  <!-- レモン狩り -->
  <div class="harvestfruitscoming">
    <p>レモン狩り</p>
    <p>～COMING SOON～</p>
    <p>現時点では予約を承っておりません。</p>
    <p>2023年10月～12月の予定です。しばらくお待ちください。</p>
  </div>
  <br>
</article>

@endsection
@section('footer')
@include('layouts.footer')

<script>
  document.querySelectorAll(".day div input").forEach((item) => {
    item.addEventListener("click",(e) => {
      const day = e.target.parentNode.parentNode.querySelector("input[type=hidden]").value;
      document.querySelector("input[name=day]").value = day;
    });
  });
</script>
@endsection