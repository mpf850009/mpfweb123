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
            <a  class="image fit"><img src="{{asset('images/bikerental/taitung1.jpg')}}" alt="阿勝單車" /></a>
            <h3>阿勝單車</h3>
            <h4>阿勝單車介紹</h4>
            <p>
                台東市新站路223號<br>
                台東單車店址位於火車站正前方100公尺處,阿勝單車出租<br>
                店面. 台東市新站路223號 (我們的統一編號為74919595為合法單車出租業者)<br>
                聯絡電話:東明 0982158153<br>
                服務時間： 每日上午九點到下午六點 　／可以提供預約時間
            </p>
        </section>
        <section>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.257423015011!2d121.12278311434001!3d22.792923430592865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346fba2d326e95ed%3A0xf1b8d9f7769eca62!2zOTUw5Y-w5p2x57ij5Y-w5p2x5biC5paw56uZ6LevMjIz6Jmf!5e0!3m2!1szh-TW!2stw!4v1522636638387"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
    </div>
</div>
@endsection