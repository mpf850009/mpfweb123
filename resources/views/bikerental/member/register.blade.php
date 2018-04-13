@extends('bikerental.main')
@section('content')

<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>加入會員Join us</h2>
            <p>若您已於MPF租車系統成功註冊，可以點擊會員登入後開始租車！<br>If you have successfully registered in the MPF bike rental system, you can click on Member Login to start！</p>
        </header>

        <!-- Content -->
        <section >
            <a class="image fit"><img src="{{asset('images/bikerental/index1.jpg')}}" width="80%" height="80%" alt="" /></a>
            <form role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                <p class="heading"><h3>請輸入帳號資料</h3></p>
                <div class="row uniform 50%">
                    <strong>姓　　名：</strong><font color="#FF0000">*</font>
                    <div class="6u$ 12u$(xsmall)">
                        <input
                                type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="王小明"
                                required
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                    </div>
                    <strong>電　　話：</strong><font color="#FF0000">*</font>
                    <div class="6u$ 12u$(xsmall)">
                        <input
                                type="text"
                                class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="0987654321"
                                required
                        >
                        @if ($errors->has('phone'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </div>
                        @endif
                    </div>
                    <strong>電子郵件：</strong><font color="#FF0000">*</font>
                    <div class="6u$ 12u$(xsmall)">
                        <input
                                type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="example@example.com"
                                required
                        >
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                    <strong>密　　碼：</strong><font color="#FF0000">*</font>
                    <div class="6u$ 12u$(xsmall)">
                        <input
                                type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password"
                                placeholder="請輸入密碼"
                                required
                        >
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                    </div>
                    <strong>確認密碼：</strong><font color="#FF0000">*</font>
                    <div class="6u$ 12u$(xsmall)">
                        <input
                                type="password"
                                class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                name="password_confirmation"
                                placeholder="請再次輸入密碼"
                                required
                        >
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                        @endif
                    </div>
                    <p> <font color="#FF0000">*</font> 表示為必填的欄位</p>
                </div>
                <div class="12u$">
                    <ul class="actions">
                        <input name="action" type="hidden" id="action" value="join">
                        <li><input type="submit" value="送出申請Confirm" class="special" name="Submit2" /></li>
                        <li><input type="button" name="Submit" value="回上一頁Previous Page" onClick="window.history.back();"></li>
                    </ul>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection