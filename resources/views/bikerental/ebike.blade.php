@extends('bikerental.main')
@section('content')
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>助動車E-Bike</h2>
            <p>出租價目表及車種詳細介紹</p>
        </header>

    <!-- E-Bike -->
        <section>
            <h3>20吋小折小徑車</h3>
            <div class="row">
                <div class="6u 12u(xsmall)">
                    <h4>車體圖片</h4>
                    <a href="#" class="image fit"><img src="{{asset('images/bikerental/bikesilver.jpg')}}" alt="" /></a>
                </div>
                <div class="6u 12u(xsmall)">
                    <h4>詳細介紹</h4>
                    <ul>
                        <li>36V無刷直流高效率馬達</li>
                        <li>最大400W輸出</li>
                        <li>最高速度為25km/hr</li>
                        <li>行駛里程約30~80km</li>
                        <li>20吋低跨度車架</li>
                        <li>6段外變速</li>
                        <li>前輪雙叉避震</li>
                        <li>租車即附前燈和大鎖</li>
                        <li>APP藍芽控制</li>
                        <li>APP緊急救援功能</li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h3>26吋小折小徑車</h3>
            <div class="row">
                <div class="6u 12u(xsmall)">
                    <h4>車體圖片</h4>
                    <a href="#" class="image fit"><img src="{{asset('images/bikerental/ebike5.jpg')}}" alt="" /></a>
                </div>
                <div class="6u 12u(xsmall)">
                    <h4>詳細介紹</h4>
                    <ul>
                        <li>36V長效鋰電池及無刷直流高效率馬達</li>
                        <li>360中置馬達(MPF 5.3)</li>
                        <li>最高速度為25km/hr</li>
                        <li>行駛里程約30~80km</li>
                        <li>26吋低跨度車架</li>
                        <li>6段外變速</li>
                        <li>前輪雙叉避震</li>
                        <li>租車即附LED前車燈和大鎖</li>
                        <li>APP藍芽控制</li>
                        <li>APP緊急救援功能</li>
                        <li>鐵質前置物籃</li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h3>MPF203</h3>
            <div class="row">
                <div class="6u 12u(xsmall)">
                    <h4>車體圖片</h4>
                    <a href="#" class="image fit"><img src="{{asset('images/bikerental/ebike7.jpg')}}" alt="" /></a>
                </div>
                <div class="6u 12u(xsmall)">
                    <h4>詳細介紹</h4>
                    <ul>
                        <li>36V無刷直流高效率馬達</li>
                        <li>最大400W輸出</li>
                        <li>最高速度為25km/hr</li>
                        <li>行駛里程約30~80km</li>
                        <li>20吋低跨度車架</li>
                        <li>6段外變速</li>
                        <li>前輪雙叉避震</li>
                        <li>租車即附前燈和大鎖</li>
                        <li>APP藍芽控制</li>
                        <li>APP緊急救援功能</li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h3>胖胎車電動輔助自行車</h3>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="3u  6u(xsmall)"></div>
                    <div class="6u  12u$(xsmall)"><span class="image fit"><img src="{{asset('images/bikerental/ebike3.jpg')}}" alt="" /></span></div>
                    <div class="3u$ 6u(xsmall)"></div>
                    <div class="6u  12u(xsmall)">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>配件</th>
                                    <th>規格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>車架Frame</td>
                                    <td>鋁合金#6061</td>
                                </tr>
                                <tr>
                                    <td>變速Groupset</td>
                                    <td>11速SHIMANO 105</td>
                                </tr>
                                <tr>
                                    <td>齒盤Crankset</td>
                                    <td>1/2*11/128吋*36T</td>
                                </tr>
                                <tr>
                                    <td>飛輪Cassette</td>
                                    <td>11/32T</td>
                                </tr>
                                <tr>
                                    <td>車手Handlebar</td>
                                    <td>鋁合金 31.8 700W ISO4210-M</td>
                                </tr>
                                <tr>
                                    <td>座管Seatpost</td>
                                    <td>鋁合金31.8 ISO4210-M</td>
                                </tr>

                                <tr>
                                    <td>輪胎Tires</td>
                                    <td>26*4吋</td>
                                </tr>
                                <tr>
                                    <td>輪圈Wheelset</td>
                                    <td>26*32H 單層圈 方形減重孔 BK</td>
                                </tr>
                                <tr>
                                    <td>重量Weight</td>
                                    <td>23.3KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="6u$ 12u(xsmall)">
                        <ol>
                            <li>符合台灣法規</li>
                            <li>提供動力輔助最高25公里後停止補助動力</li>
                            <li>最大輸出功率400W以下</li>
                            <li>充電後最大輔助可行走約50公里</li>
                            <li>最低補助可行走約140公里</li>
                            <li>超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
            <div class="clearfix "> </div>
        </section>

        <section>
            <h3>平把電動輔助自行車</h3>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="3u  6u(xsmall)"></div>
                    <div class="6u  12u$(xsmall)"><span class="image fit"><img src="{{asset('images/bikerental/ebike1.jpg')}}" alt="" /></span></div>
                    <div class="3u$ 6u(xsmall)"></div>
                    <div class="6u  12u(xsmall)">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>配件</th>
                                    <th>規格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>車架Frame</td>
                                    <td>鋁合金#6061</td>
                                </tr>
                                <tr>
                                    <td>變速Groupset</td>
                                    <td>11速SHIMANO 105</td>
                                </tr>
                                <tr>
                                    <td>齒盤Crankset</td>
                                    <td>1/2*11/128吋*34T</td>
                                </tr>
                                <tr>
                                    <td>飛輪Cassette</td>
                                    <td>11/32T</td>
                                </tr>
                                <tr>
                                    <td>車手Handlebar</td>
                                    <td>鋁合金 31.8 (620W, 640W, 660W) ISO4210-M</td>
                                </tr>
                                <tr>
                                    <td>座管Seatpost</td>
                                    <td>鋁合金31.8 ISO4210-M</td>
                                </tr>

                                <tr>
                                    <td>輪胎Tires</td>
                                    <td>700C*35C</td>
                                </tr>
                                <tr>
                                    <td>輪圈Wheelset</td>
                                    <td>700C*32H 雙層圈 BK</td>
                                </tr>
                                <tr>
                                    <td>重量Weight</td>
                                    <td>21.5KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="6u$ 12u(xsmall)">
                        <ol>
                            <li>符合台灣法規</li>
                            <li>提供動力輔助最高25公里後停止補助動力</li>
                            <li>最大輸出功率400W以下</li>
                            <li>充電後最大輔助可行走約50公里</li>
                            <li>最低補助可行走約140公里</li>
                            <li>超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="clearfix "> </div>
        </section>

        <section>
            <h3>彎把電動輔助自行車</h3>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="3u  6u(xsmall)"></div>
                    <div class="6u  12u$(xsmall)"><span class="image fit"><img src="{{asset('images/bikerental/ebike2.jpg')}}" alt="" /></span></div>
                    <div class="3u$ 6u(xsmall)"></div>
                    <div class="6u  12u(xsmall)">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>配件</th>
                                    <th>規格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>車架Frame</td>
                                    <td>鋁合金#6061</td>
                                </tr>
                                <tr>
                                    <td>變速Groupset</td>
                                    <td>11速SHIMANO 105</td>
                                </tr>
                                <tr>
                                    <td>齒盤Crankset</td>
                                    <td>1/2*11/128吋*30T</td>
                                </tr>
                                <tr>
                                    <td>飛輪Cassette</td>
                                    <td>11/32T</td>
                                </tr>
                                <tr>
                                    <td>車手Handlebar</td>
                                    <td>鋁合金 31.8 (620W, 640W, 660W) ISO4210-M</td>
                                </tr>
                                <tr>
                                    <td>座管Seatpost</td>
                                    <td>鋁合金31.8 EX:105 L:41 ISO4210-M</td>
                                </tr>

                                <tr>
                                    <td>輪胎Tires</td>
                                    <td>700C*35C</td>
                                </tr>
                                <tr>
                                    <td>輪圈Wheelset</td>
                                    <td>700C*32H 雙層圈 BK</td>
                                </tr>
                                <tr>
                                    <td>重量Weight</td>
                                    <td>19.5KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="6u$ 12u(xsmall)">
                        <ol>
                            <li>符合台灣法規</li>
                            <li>提供動力輔助最高25公里後停止補助動力</li>
                            <li>最大輸出功率400W以下</li>
                            <li>充電後最大輔助可行走約50公里</li>
                            <li>最低補助可行走約140公里</li>
                            <li>超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="clearfix "> </div>
        </section>

        <section>
            <h3>K&K胖胎車</h3>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="3u  6u(xsmall)"></div>
                    <div class="6u  12u$(xsmall)"><span class="image fit"><img src="{{asset('images/bikerental/ebike6.jpg')}}" alt="" /></span></div>
                    <div class="3u$ 6u(xsmall)"></div>
                    <div class="6u  12u(xsmall)">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>配件</th>
                                    <th>規格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>車架Frame</td>
                                    <td>鋁合金#6061</td>
                                </tr>
                                <tr>
                                    <td>變速Groupset</td>
                                    <td>11速SHIMANO 105</td>
                                </tr>
                                <tr>
                                    <td>齒盤Crankset</td>
                                    <td>1/2*11/128吋*36T</td>
                                </tr>
                                <tr>
                                    <td>飛輪Cassette</td>
                                    <td>11/32T</td>
                                </tr>
                                <tr>
                                    <td>車手Handlebar</td>
                                    <td>鋁合金 31.8 700W ISO4210-M</td>
                                </tr>
                                <tr>
                                    <td>座管Seatpost</td>
                                    <td>鋁合金31.8 ISO4210-M</td>
                                </tr>

                                <tr>
                                    <td>輪胎Tires</td>
                                    <td>26*4吋</td>
                                </tr>
                                <tr>
                                    <td>輪圈Wheelset</td>
                                    <td>26*32H 單層圈 方形減重孔 BK</td>
                                </tr>
                                <tr>
                                    <td>重量Weight</td>
                                    <td>23.3KG</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="6u$ 12u(xsmall)">
                        <ol>
                            <li>符合台灣法規</li>
                            <li>提供動力輔助最高25公里後停止補助動力</li>
                            <li>最大輸出功率400W以下</li>
                            <li>充電後最大輔助可行走約50公里</li>
                            <li>最低補助可行走約140公里</li>
                            <li>超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="clearfix "> </div>
        </section>

    </div>
</div>
@endsection