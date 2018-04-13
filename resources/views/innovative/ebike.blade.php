@extends('innovative.main')
@section('content')

<div id="production" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Product</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike1">
                        <img src=" {{asset('images/innovative/ebike26.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption" style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">20" E-Bike
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike2">
                        <img src=" {{asset('images/innovative/ebike27.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">26" E-Bike
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike3">
                        <img src=" {{asset('images/innovative/ebike28.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">MPF203
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike4">
                        <img src=" {{asset('images/innovative/ebike13.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">胖胎電動輔助自行車
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike5">
                        <img src=" {{asset('images/innovative/ebike10.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">平把電動輔助自行車
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike6">
                        <img src=" {{asset('images/innovative/ebike12.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">彎把電動輔助自行車
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-6 gallery-grids ">
                <div class="w3ls-hover " style="padding:15px 15px;">
                    <a href="#bike7">
                        <img src=" {{asset('images/innovative/ebike29.jpg')}} " class="img-responsive zoom-img img-thumbnail" alt=" " />
                        <div class="view-caption " style="padding:15px 0px;">
                            <h5 style="font-size:1.5em;">K&K胖胎車
                                <br>
                                <small>點我查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="bike1" class="gallery">
    <div class="container">
        <div class="w3-headings-all" >
            <h3>20" E-Bike</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike26.jpg')}} " data-lightbox="example-set " data-title="20吋 E-Bike ">
                        <img src="{{asset('images/innovative/ebike26.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>20" E-Bike
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids " style="padding:0cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">36V無刷直流高效率馬達</li>
                    <li  style="font-weight:bolder;font-size:23px;">最大400W輸出</li>
                    <li  style="font-weight:bolder;font-size:23px;">最高速度為25km/hr</li>
                    <li  style="font-weight:bolder;font-size:23px;">行駛里程約30~80km</li>
                    <li  style="font-weight:bolder;font-size:23px;">20吋低跨度車架</li>
                    <li  style="font-weight:bolder;font-size:23px;">6段外變速</li>
                    <li  style="font-weight:bolder;font-size:23px;">前輪雙叉避震</li>
                    <li  style="font-weight:bolder;font-size:23px;">租車即附前燈和大鎖</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP藍芽控制</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP緊急救援功能</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
                <div class="clearfix "> </div>
            </div>
        </div>
    </div>
</div>

<div id="bike2" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>26" E-Bike</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike27.jpg')}} " data-lightbox="example-set " data-title="20吋 E-Bike ">
                        <img src="{{asset('images/innovative/ebike27.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>26" E-Bike
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids " style="padding:0cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">36V長效鋰電池及無刷直流高效率馬達</li>
                    <li  style="font-weight:bolder;font-size:23px;">360中置馬達(MPF 5.3)</li>
                    <li  style="font-weight:bolder;font-size:23px;">最高速度為25km/hr</li>
                    <li  style="font-weight:bolder;font-size:23px;">行駛里程約30~80km</li>
                    <li  style="font-weight:bolder;font-size:23px;">26吋低跨度車架</li>
                    <li  style="font-weight:bolder;font-size:23px;">6段外變速</li>
                    <li  style="font-weight:bolder;font-size:23px;">前輪雙叉避震</li>
                    <li  style="font-weight:bolder;font-size:23px;">租車即附LED前車燈和大鎖</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP藍芽控制</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP緊急救援功能</li>
                    <li  style="font-weight:bolder;font-size:23px;">鐵質前置物籃</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="bike3" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>MPF203</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike28.jpg')}} " data-lightbox="example-set " data-title="MPF203">
                        <img src="{{asset('images/innovative/ebike28.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>MPF203
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids " style="padding:0cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder; font-size:23px;">36V無刷直流高效率馬達</li>
                    <li  style="font-weight:bolder; font-size:23px;">最大400W輸出</li>
                    <li  style="font-weight:bolder;font-size:23px;">最高速度為25km/hr</li>
                    <li  style="font-weight:bolder;font-size:23px;">行駛里程約30~80km</li>
                    <li  style="font-weight:bolder;font-size:23px;">20吋低跨度車架</li>
                    <li  style="font-weight:bolder;font-size:23px;">6段外變速</li>
                    <li  style="font-weight:bolder;font-size:23px;">前輪雙叉避震</li>
                    <li  style="font-weight:bolder;font-size:23px;">租車即附前燈和大鎖</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP藍芽控制</li>
                    <li  style="font-weight:bolder;font-size:23px;">APP緊急救援功能</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="bike4" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>胖胎車電動輔助自行車</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike13.jpg')}} " data-lightbox="example-set " data-title="胖胎車電動輔助自行車">
                        <img src="{{asset('images/innovative/ebike13.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>胖胎車電動輔助自行車
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
        <div class="gallery-w3lsrow" valign="middle">
            <div class="col-sm-6 col-xs-12 gallery-grids bs-docs-example ">
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
                            <td>前叉Front Fork</td>
                            <td>Renegade Air TRL 行程100mm 附線控</td>
                        </tr>
                        <tr>
                            <td>煞車組</td>
                            <td>SHIMANO 拉柄BLM365剎車器BRM36</td>
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
                            <td>鍊條Chain</td>
                            <td>KMC X9e</td>
                        </tr>
                        <tr>
                            <td>坐墊柱</td>
                            <td>ETENi L400mm27.2 線控式可調座管</td>
                        </tr>
                        <tr>
                            <td>飛輪Cassette</td>
                            <td>11/34T</td>
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
                            <td>鋼絲</td>
                            <td>白鐵 BK</td>
                        </tr>
                        <tr>
                            <td>腳踏</td>
                            <td>∮916 CRMO軸心 鋁 BK ISO4210</td>
                        </tr>
                        <tr>
                            <td>停車架</td>
                            <td>側立 可調式 鋁 B</td>
                        </tr>
                        <tr>
                            <td>前燈</td>
                            <td>SSL127WH</td>
                        </tr>
                        <tr>
                            <td>長寬高</td>
                            <td>1850*650*1100 MM</td>
                        </tr>
                        <tr>
                            <td>重量Weight</td>
                            <td>23.3KG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids" style="padding:1cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">符合台灣法規</li>
                    <li  style="font-weight:bolder;font-size:23px;">提供動力輔助最高25公里後停止補助動力</li>
                    <li  style="font-weight:bolder;font-size:23px;">最大輸出功率400W以下</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電需約5~6小時完全充飽電</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電後最大輔助可行走約50公里</li>
                    <li  style="font-weight:bolder;font-size:23px;">最低補助可行走約140公里（會因地形、氣候、載重而有所不同，測試載重約70KG）</li>
                    <li  style="font-weight:bolder;font-size:23px;">倒踩板電動機應無驅動。</li>
                    <li  style="font-weight:bolder;font-size:23px;">動力輸出：電動輔助自行車之電動機應於踏板停止踩踏三秒內停止動力輸出。</li>
                    <li  style="font-weight:bolder;font-size:23px;">超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="clearfix "> </div>
    </div>
</div>

<div id="bike5" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>平把電動輔助自行車</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike10.jpg')}} " data-lightbox="example-set " data-title="平把電動輔助自行車">
                        <img src="{{asset('images/innovative/ebike10.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>平把電動輔助自行車
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
        <div class="gallery-w3lsrow" valign="middle">
            <div class="col-sm-6 col-xs-12 gallery-grids bs-docs-example ">
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
                            <td>前叉Front Fork</td>
                            <td>Renegade Air TRL 行程100mm 附線控</td>
                        </tr>
                        <tr>
                            <td>煞車組</td>
                            <td>SHIMANO 拉柄BLM365剎車器BRM36</td>
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
                            <td>鍊條Chain</td>
                            <td>KMC X11e</td>
                        </tr>
                        <tr>
                            <td>坐墊柱</td>
                            <td>ETENi L400mm27.2 線控式可調座管</td>
                        </tr>
                        <tr>
                            <td>飛輪Cassette</td>
                            <td>11/34T</td>
                        </tr>
                        <tr>
                            <td>車手Handlebar</td>
                            <td>鋁合金 31.8 620W,640W,660W ISO4210-M</td>
                        </tr>
                        <tr>
                            <td>座管Seatpost</td>
                            <td>鋁合金31.8 EX105 L41 ISO4210-M</td>
                        </tr>
                        <tr>
                            <td>輪胎Tires</td>
                            <td>700C*35C</td>
                        </tr>
                        <tr>
                            <td>輪圈Wheelset</td>
                            <td>700C*32H 雙層圈 方形減重孔 BK</td>
                        </tr>
                        <tr>
                            <td>鋼絲</td>
                            <td>白鐵 BK</td>
                        </tr>
                        <tr>
                            <td>腳踏</td>
                            <td>∮916 CRMO軸心 鋁 BK ISO4210</td>
                        </tr>
                        <tr>
                            <td>停車架</td>
                            <td>側立 可調式 鋁 B</td>
                        </tr>
                        <tr>
                            <td>前燈</td>
                            <td>SSL127WH</td>
                        </tr>
                        <tr>
                            <td>長寬高</td>
                            <td>1760*670*1050 MM</td>
                        </tr>
                        <tr>
                            <td>重量Weight</td>
                            <td>21.5KG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids" style="padding:1cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">符合台灣法規</li>
                    <li  style="font-weight:bolder;font-size:23px;">提供動力輔助最高25公里後停止補助動力</li>
                    <li  style="font-weight:bolder;font-size:23px;">最大輸出功率400W以下</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電需約5~6小時完全充飽電</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電後最大輔助可行走約50公里</li>
                    <li  style="font-weight:bolder;font-size:23px;">最低補助可行走約140公里（會因地形、氣候、載重而有所不同，測試載重約70KG）</li>
                    <li  style="font-weight:bolder;font-size:23px;">倒踩板電動機應無驅動。</li>
                    <li  style="font-weight:bolder;font-size:23px;">動力輸出：電動輔助自行車之電動機應於踏板停止踩踏三秒內停止動力輸出。</li>
                    <li  style="font-weight:bolder;font-size:23px;">超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="clearfix "> </div>
    </div>
</div>

<div id="bike6" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>彎把電動輔助自行車</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike12.jpg')}} " data-lightbox="example-set " data-title="彎把電動輔助自行車">
                        <img src="{{asset('images/innovative/ebike12.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>彎把電動輔助自行車
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
        <div class="gallery-w3lsrow" valign="middle">
            <div class="col-sm-6 col-xs-12 gallery-grids bs-docs-example ">
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
                            <td>前叉Front Fork</td>
                            <td>CARBON鋁豎</td>
                        </tr>
                        <tr>
                            <td>煞車組</td>
                            <td>BB5</td>
                        </tr>
                        <tr>
                            <td>變速Groupset</td>
                            <td>11速SHIMANO 105</td>
                        </tr>
                        <tr>
                            <td>齒盤Crankset</td>
                            <td>1/2*11/128吋*44/30T</td>
                        </tr>
                        <tr>
                            <td>鍊條Chain</td>
                            <td>KMC X11e</td>
                        </tr>
                        <tr>
                            <td>坐墊柱</td>
                            <td>SPSL282 L350mm27.2 鋁</td>
                        </tr>
                        <tr>
                            <td>飛輪Cassette</td>
                            <td>11/32T</td>
                        </tr>
                        <tr>
                            <td>車手Handlebar</td>
                            <td>鋁合金 31.8 420W , 440W ISO421</td>
                        </tr>
                        <tr>
                            <td>座管Seatpost</td>
                            <td>鋁合金 31.8 EX807度 , 90 7度 L38 ISO4210M</td>
                        </tr>
                        <tr>
                            <td>輪胎Tires</td>
                            <td>700C*32C</td>
                        </tr>
                        <tr>
                            <td>輪圈Wheelset</td>
                            <td>700C*28H 雙層圈 BK</td>
                        </tr>
                        <tr>
                            <td>鋼絲</td>
                            <td>白鐵 BK</td>
                        </tr>
                        <tr>
                            <td>腳踏</td>
                            <td>∮916 CRMO軸心 鋁 BK ISO4210</td>
                        </tr>
                        <tr>
                            <td>停車架</td>
                            <td>側立 可調式 鋁 B</td>
                        </tr>
                        <tr>
                            <td>前燈</td>
                            <td>SSL127WH</td>
                        </tr>
                        <tr>
                            <td>長寬高</td>
                            <td>1750*480*960 MM</td>
                        </tr>
                        <tr>
                            <td>重量Weight</td>
                            <td>19.5KG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids" style="padding:1cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">符合台灣法規</li>
                    <li  style="font-weight:bolder;font-size:23px;">提供動力輔助最高25公里後停止補助動力</li>
                    <li  style="font-weight:bolder;font-size:23px;">最大輸出功率400W以下</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電需約5~6小時完全充飽電</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電後最大輔助可行走約50公里</li>
                    <li  style="font-weight:bolder;font-size:23px;">最低補助可行走約140公里（會因地形、氣候、載重而有所不同，測試載重約70KG）</li>
                    <li  style="font-weight:bolder;font-size:23px;">倒踩板電動機應無驅動。</li>
                    <li  style="font-weight:bolder;font-size:23px;">動力輸出：電動輔助自行車之電動機應於踏板停止踩踏三秒內停止動力輸出。</li>
                    <li  style="font-weight:bolder;font-size:23px;">超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="clearfix "> </div>
    </div>
</div>

<div id="bike7" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>K&K胖胎車</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="{{asset('images/innovative/ebike29.jpg')}} " data-lightbox="example-set " data-title="K&K胖胎車">
                        <img src="{{asset('images/innovative/ebike29.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>K&K 胖胎車
                                <br>
                                <small>點我放大</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
        <div class="gallery-w3lsrow" valign="middle">
            <div class="col-sm-6 col-xs-12 gallery-grids bs-docs-example ">
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
                            <td>前叉Front Fork</td>
                            <td>Renegade Air TRL 行程100mm 附線控</td>
                        </tr>
                        <tr>
                            <td>煞車組</td>
                            <td>SHIMANO 拉柄BLM365剎車器BRM36</td>
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
                            <td>鍊條Chain</td>
                            <td>KMC X9e</td>
                        </tr>
                        <tr>
                            <td>坐墊柱</td>
                            <td>ETENi L400mm27.2 線控式可調座管</td>
                        </tr>
                        <tr>
                            <td>飛輪Cassette</td>
                            <td>11/34T</td>
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
                            <td>鋼絲</td>
                            <td>白鐵 BK</td>
                        </tr>
                        <tr>
                            <td>腳踏</td>
                            <td>∮916 CRMO軸心 鋁 BK ISO4210</td>
                        </tr>
                        <tr>
                            <td>停車架</td>
                            <td>側立 可調式 鋁 B</td>
                        </tr>
                        <tr>
                            <td>前燈</td>
                            <td>SSL127WH</td>
                        </tr>
                        <tr>
                            <td>長寬高</td>
                            <td>1850*650*1100 MM</td>
                        </tr>
                        <tr>
                            <td>重量Weight</td>
                            <td>23.3KG</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids" style="padding:1cm 1cm;">
                <ol>
                    <li  style="font-weight:bolder;font-size:23px;">符合台灣法規</li>
                    <li  style="font-weight:bolder;font-size:23px;">提供動力輔助最高25公里後停止補助動力</li>
                    <li  style="font-weight:bolder;font-size:23px;">最大輸出功率400W以下</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電需約5~6小時完全充飽電</li>
                    <li  style="font-weight:bolder;font-size:23px;">充電後最大輔助可行走約50公里</li>
                    <li  style="font-weight:bolder;font-size:23px;">最低補助可行走約140公里（會因地形、氣候、載重而有所不同，測試載重約70KG）</li>
                    <li  style="font-weight:bolder;font-size:23px;">倒踩板電動機應無驅動。</li>
                    <li  style="font-weight:bolder;font-size:23px;">動力輸出：電動輔助自行車之電動機應於踏板停止踩踏三秒內停止動力輸出。</li>
                    <li  style="font-weight:bolder;font-size:23px;">超速斷電：行駛速率超過25KM/H時電動輔助自行車之電動機電源應能於三秒內自動暫停供電</li>
                </ol>
                <h2 style="float:left">
                    <a href="#production">
                        <span class="label label-primary">back</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="clearfix "> </div>
    </div>
</div>

<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>
@endsection