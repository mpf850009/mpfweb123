@extends('bikerental.main')
@section('content')
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>歡迎光臨MPF會員中心Welcome to MPF Member Center</h2>
            <p>所有租車功能必須經由會員登入後才能使用，請您先行加入會員後，在下方登入會員系統視窗中，執行登入動作進入租車流程。<br/>
            All bike rental features must be registered by the member to use, you first join the membership, login below member system window, enter the bike rental process.</p>
        </header>
        <div class="row 150%">
            <div class="3u 12u$(medium)">

            <!-- Sidebar -->
                <section id="sidebar">
                    <section>
                        <h3>會員登入Sign in</h3>
                        <td>
                            <div>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <p>
                                        <h4>電子郵件E-mail：</h4>
                                        <div class="12u$">
                                            <input
                                                id="email"
                                                type="email"
                                                class="logintextbox form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email"
                                                value="{{ old('email') }}"
                                                required
                                                autofocus
                                                placeholder="example@example.com"
                                            >
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div><br/>
                                        <h4>密碼Password：</h4>
                                        <div class="12u$">
                                            <input
                                                    id="password"
                                                    type="password"
                                                    class="logintextbox form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password"
                                                    required
                                                    placeholder="請輸入密碼"
                                            >
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </p>
                                    <p>
                                        <div class="12u$">
                                            <input type="checkbox" id="remember" class="form-check-input" name="remember" value="true" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">記住密碼 Remember</label>
                                        </div>
                                    </p>
                                    <div class="12u$">
                                        <ul class="actions vertical">
                                            <li><input class="button fit" type="submit" name="button" id="button" value="登入系統Login" /></li>
                                        </ul>
                                        
                                    </div>
                                    <div class="12u$">
                                        <ul class="actions vertical">
                                            <li><a href="{{ route('bikerental.register') }}" class="button special fit">加入會員Join</a></li>
                                        </ul>
                                    </div>

                                </form>
                                <p>
                                    <a href="{{ route('password.request') }}">忘記密碼Forgot PWD?</a>
                                </p>
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
            <div class="9u$ 12u$(medium) important(medium)">

                <!-- Content -->
                <section id="content">
                    <a class="image fit"><img src="{{asset('images/bikerental/index2.png')}}" alt="" /></a>
                    <h4>　　本公司會使用您的資料進行市場調查、客戶服務等使用。
                        您同意本公司以您所提供的個人資料與您進行聯絡及提供您本公司之活動訊息、服務及相關事項聯繫。
                        您的個人資料會被我們蒐集並受到安全的保護，本公司將嚴謹的保管您的個人資料，
                        不會任意揭露或出售、交換、或轉讓您的任何非公開性資料予第三人。</h4>
                    <h3>本會員系統擁有以下的功能：</h3>
                    <ul>
                        <li>免費加入會員。</li>
                        <li>每個會員可修改本身資料。</li>
                        <li>若是遺忘密碼，會員可由系統發出電子信函通知。</li>
                        <li>管理者可以修改、刪除會員的資料。</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection