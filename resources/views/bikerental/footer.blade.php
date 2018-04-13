<footer id="footer">
    <!--
    <ul class="icons">
        <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
    </ul>-->
    <ul class="copyright">
        <li>&copy; Copyright (C) 2017 Unique Product & Design Co., Ltd. All Rights Reserved.</li>
        <li><a target="_blank" href="http://www.mpfdrive.tw/">MPF Drive 穩正企業股份有限公司</a></li>
        <li>Design: <a target="_blank" href="http://html5up.net">HTML5 UP</a></li>
        @if($active=='index')
            <li>
                資料來源：
                <a target="_blank" href="https://www.twtainan.net/">台南市政府觀光旅遊局</a>
                <a target="_blank" href="https://swcoast-nsa.travel/zh-tw">雲嘉南濱海國家風景區</a>
                <a target="_blank" href="https://tour.taitung.gov.tw">台東縣觀光旅遊網</a>
            </li>
        @elseif($active=='fulong')
            <li>
                資料來源：<a target="_blank" href="http://www.ifulong.com.tw">福隆驛站</a>
            </li>
        @elseif($active=='jiaoxi')
            <li>
                資料來源：<a target="_blank" href="http://www.natural-hotel.com.tw">自然風溫泉會館</a>
            </li>
        @elseif($active=='beimen')
            <li>
                資料來源：<a target="_blank" href="http://beimenislet.vrworld.com.tw/">北門嶼輕食風味餐廳</a>
            </li>
        @elseif($active=='asheng_h' || $active=='asheng_t')
            <li>
                資料來源：<a target="_blank" href="http://bike.e089.com.tw/">阿勝單車</a>
            </li>
        @elseif($active=='park_water')
            <li>
                資料來源：<a target="_blank" href="https://tour.taitung.gov.tw/zh-tw/attraction/details/265">台東縣觀光旅遊網</a>
            </li>
        @elseif($active=='explore')
            <li>
                資料來源：<a target="_blank" href="http://www.ettaitung.com/">探索車隊</a>
            </li>
        @endif

    </ul>
</footer>