@extends('bikerental.main')
@section('content')
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>阿勝單車</h2>
            <p>A SHENG Bike Rental</p>
        </header>

        <!-- Content -->
        <section id="content">
            <a  class="image fit"><img src="{{asset('images/bikerental/hualien2.jpg')}}" alt="阿勝單車" /></a>
            <h3>阿勝單車</h3>
            <h4>阿勝單車介紹</h4>
            <p>
                花蓮市中山路561號（優逗水族館）<br/>
                花蓮地區 本公司花蓮地址位於中山路561號 ~~距離火車站約400公尺！<br/>
                (出票口後往前約100公尺紅綠燈右轉~~約250公尺後接上中山路,過馬路後左轉約50公尺即到達)<br>
                服務時間： 每日上午10 點到晚上9 點　／ 可以提供預約時間
            </p>
        </section>
        <section>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.2251290196596!2d121.59964725626395!3d23.987825995514413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34689fb9e38d9bcd%3A0xed62a454dc760c53!2zOTcw6Iqx6JOu57ij6Iqx6JOu5biC5Lit5bGx6LevNTYx6Jmf!5e0!3m2!1szh-TW!2stw!4v1522635656499"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
    </div>
</div>
@endsection