@extends('innovative.main')
@section('content')
<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>

<!-- Gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>E-Bike Rental Location</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/tainan1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/tainan1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台南北門嶼</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/tainan2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/tainan2.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台南安平</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taipei1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taipei1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>新北福隆</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東車站</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taiwan.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taiwan.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>單車路線</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids" >
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung2.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>花蓮車站</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids" >
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung3.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung3.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東關山</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung4.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung4.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東海濱</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/tainan1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/tainan1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台南北門嶼</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/tainan2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/tainan2.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台南安平</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taipei1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taipei1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>新北福隆</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung1.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東車站</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung2.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>花蓮車站</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung3.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung3.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東關山</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover" style="padding:15px 15px;">
                    <a href="{{asset('images/innovative/taitung4.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/taitung4.jpg')}}" class="img-responsive zoom-img img-thumbnail" alt="" />
                        <div class="view-caption">
                            <h5>台東海濱</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="container"><br>
                <p style="float:right">圖片來源: 「<a target="_blank" href="http://www.chinatimes.com/newspapers/20150118000297-260114">中時電子報</a>」</p>
            </div>

            <!--點選圖片作介紹
            <h4>
                <a href="#" data-toggle="modal" data-target="#myModal11"><img src="{{asset('images/innovative/taitung4.jpg')}}" class="img-responsive zoom-img img-thumbnail"></a>
            </h4>
            @include('innovative.service')
        </div>
    </div>
</div>


@endsection