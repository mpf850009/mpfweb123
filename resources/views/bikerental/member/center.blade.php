@extends('bikerental.main')
@section('content')
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>歡迎光臨MPF會員中心<br/>Welcome to MPF Member Center</h2>
            <p>請點選「我要租車」開始租車流程<br/>Please click ＂Bike Rental＂ to start renting process</p>
        </header>
        <div class="row 150%">
            <div class="4u 12u$(medium)">

            <!-- Sidebar -->
                <section id="sidebar">
                    <section>
                        <h3>會員登入成功！<br/>Sign In Suceesfully！</h3>
                        <td>
                            <div>
                                <form name="form1" method="post" action="">

                                    <p>
                                        <strong>NO. {{ Auth::user()->id }} </strong><br>
                                        <strong>{{ Auth::user()->name }}</strong> 您好！
                                    </p>
                                    
                        
                                    <p>
                                        <a href="">修改會員資料Modify Information</a><br/><a href="">查詢訂單Checking Orders</a>
                                    </p>
                                </form>
                                <div class="12u$">
                                    <ul class="actions vertical">
                                        <li><a href="{{route('bikerental.center')}}" class="button special fit">我要租車Bike Rental</a></li>
                                    </ul>
                                </div>
                                <div class="12u$">
                                    <ul class="actions vertical">
                                        <li><a href="{{ route('logout') }}" class="button fit" onclick="event.preventDefault();document.getElementById('logout-form').submit();">登出系統Logout</a></li>
                                    </ul>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </td>
                    </section>

                    <hr />
                    <section>
                        <a class="image fit"><img src="{{asset('images/bikerental/label.png')}}" alt="" /></a>
                        <h3>服務專線</h3>
                        <p> TEL:(06)253-8390<br> FAX:(06)254-1507<br> Email:services@mpf.com.tw<br> 統一編號:23536785<br> 地址:71042台南市永康區民東路5號</p>
                        <footer>
                            <ul class="actions">
                                <li><a href="contact.php" class="button">聯絡我們Contact</a></li>
                            </ul>
                        </footer>
                    </section>
                </section>

            </div>
            <div class="8u$ 12u$(medium) important(medium)">

            <!-- Content -->
                <section id="content">
                    <a class="image fit"><img src="{{asset('images/bikerental/index2.png')}}" alt="" /></a>
                    <h3>本會員系統擁有以下的功能：</h3>
                    <ul>
                        <li>免費加入會員。</li>
                        <li>每個會員可修改本身資料。</li>
                        <li>若是遺忘密碼，會員可由系統發出電子信函通知。</li>
                        <li>管理者可以修改、刪除會員的資料。</li>
                    </ul>

                    <h3>請會員遵守以下規則：</h3>
                    <ul>
                        <li>遵守政府的各項有關法律法規。</li>
                        <li>不得在發佈任何色情非法， 以及危害國家安全的言論。</li>
                        <li>嚴禁連結有關政治， 色情， 宗教， 迷信等違法訊息。</li>
                        <li>承擔一切因您的行為而直接或間接導致的民事或刑事法律責任。</li>
                        <li>互相尊重， 遵守互聯網絡道德；嚴禁互相惡意攻擊， 漫罵。</li>
                        <li>管理員擁有一切管理權力。</li>
                    </ul>
                </section>

            </div>
        </div>
    </div>
</div>

@endsection