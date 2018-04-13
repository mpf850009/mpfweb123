<header id="header">
    <h1 id="logo">
        <a href="index.html"></a>
    </h1>
    <nav id="nav">
        <ul>
            <li>
                <a href="{{route('bikerental.index')}}">
                    <b>首頁Home</b>
                </a>
            </li>
            <li>
                <a href="{{route('bikerental.company')}}">
                    <b>公司簡介Company</b>
                </a>
            </li>
            <li>
                <a>
                    <b>據點服務Service</b>
                </a>
                <ul>
                    <li>
                        <a>台北Taipei</a>
                        <ul>
                            <li>
                                <a href="{{route('bikerental.fulong')}}">福隆站FuLong</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>宜蘭Yilan</a>
                        <ul>
                            <li>
                                <a href="{{route('bikerental.jiaoxi')}}">礁溪站Jiaoxi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>台南Tainan</a>
                        <ul>
                            <li>
                                <a href="{{route('bikerental.beimen')}}">北門嶼Beiman</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>花蓮Hualien</a>
                        <ul>
                            <li>
                                <a href="{{route('bikerental.asheng_h')}}">阿勝租車A-Sheng</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>台東Taitung</a>
                        <ul>
                            <li>
                                <a href="{{route('bikerental.park_water')}}">親水公園Water-Park</a>
                            </li>
                            <li>
                                <a href="{{route('bikerental.explore')}}">探索車隊Explore</a>
                            </li>
                            <li>
                                <a href="{{route('bikerental.asheng_t')}}">阿勝租車A-Sheng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('bikerental.onsale')}}">
                    <b>販售項目Sale</b>
                </a>
            </li>
            <li>
                <a href="{{route('bikerental.ebike')}}">
                    <b>租賃項目Rent</b>
                </a>
            </li>
            <li>
                <a href="{{route('bikerental.contact')}}">
                    <b>聯絡我們Contact</b>
                </a>
            </li>
            @if($active!='register'&&$active!='center'&&$active!='login'&&$active!='center')
                <li>
                    <a href="{{route('bikerental.index')}}#five" class="button special">開始租車StartRental</a>
                </li>
            @else
                <li>
                    <a href="{{route('bikerental.center')}}" class="button special">會員中心MemberCenter</a>
                </li>
            @endif
            
        </ul>
    </nav>
</header>