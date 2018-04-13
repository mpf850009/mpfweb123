@extends('innovative.main')
@section('content')
@include('innovative.script.nikimotionscript')

<div id="production" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Product</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-2"></div>
            <div class=" col-sm-4 col-xs-12 gallery-grids">
                <div class="w3-headings-all">
                    <h3 style="font-size:1.5em;">autofold</h3>
                </div>
                <div class="w3ls-hover">
                    <a href="#autofold">
                        <img src="{{asset('images/innovative/nkp1.jpg')}}" class="img-responsive zoom-img " alt=" "/>
                        <div class="view-caption ">
                            <h5>AUTOFOLD
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>        
            <div class="col-sm-4 col-xs-12 gallery-grids">
                <div class="w3-headings-all">
                    <h3 style="font-size:1.5em;">autofold Lite</h3>
                </div>
                <div class="w3ls-hover">
                    <a href="#autofoldlite">
                        <img src="{{asset('images/innovative/nkp2.jpg')}}" class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>AUTOFOLD LITE
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="autofold" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Auto Fold Fabric Color</h3>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow8" title="color-Scarlett">
                    <img src="{{asset('images/innovative/color-Scarlett.png')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow1" title="color-Berry">
                    <img src="{{asset('images/innovative/color-Berry.jpg')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow2" title="color-Capri">
                    <img src="{{asset('images/innovative/color-Capri.jpg')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow3" title="color-Ebony">
                    <img src="{{asset('images/innovative/color-Ebony.png')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow4" title="color-Emerald">
                    <img src="{{asset('images/innovative/color-Emerald.jpg')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow5" title="color-Mink">
                    <img src="{{asset('images/innovative/color-Mink.jpg')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow6" title="color-Oyster">
                    <img src="{{asset('images/innovative/color-Oyster.jpg')}}" class="img-responsive img-thumbnail img-circle">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow7" title="color-Tangerine">
                    <img src="{{asset('images/innovative/color-Tangerine.jpg')}}" class="img-responsive img-circle img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow9" title="color-Forest">
                    <img src="{{asset('images/innovative/color-Forest.jpg')}}" class="img-responsive img-circle img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow10" title="color-Graphite">
                    <img src="{{asset('images/innovative/color-Graphite.jpg')}}" class="img-responsive img-circle img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow11" title="color-GreyBlue">
                    <img src="{{asset('images/innovative/color-GreyBlue.jpg')}}" class="img-responsive img-circle img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="btnFollow12" title="color-Camel">
                    <img src="{{asset('images/innovative/color-Camel.jpg')}}" class="img-responsive img-circle img-thumbnail">
                </a>
            </div>
            <div class="clearfix "> </div>

            <div class="w3ls-hover ">
                <a href="{{asset('images/scarlett02.jpg')}}" id="chghref" data-lightbox="example-set" data-title="">
                    <img src="{{asset('images/innovative/scarlett02.jpg')}}" class="img-responsive zoom-img" id="chgicon" alt=" " />
                    <div class="view-caption ">
                        <h5>Nikimotion
                            <br>
                            <small>點我查看</small>
                        </h5>
                        <span class="glyphicon glyphicon-search "></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <h3>AUTOFOLD</h3>
            <br>
            <p>
                <strong>nikimotion AUTOFOLD- the uncompromising sports stroller</strong>
                <br>The sports stroller nikimotion AUTOFOLD has been developed according to the current trend, namely the
                highest use in combination with easy handling and low weight. With the One-Fold technology, the car folds
                easily and flatly with only one handle and can thus be parked in a space-saving manner or stored in the
                car.
            </p>
            <br><strong>Description</strong><br>
            <ol>
                <li>
                    easy folding system with “central folding belt”
                </li>
                <li>
                    continuously adjustable backrest (50cm long)
                </li>
                <li>
                    aluminium chassis
                </li>
                <li>
                    stands when folded
                </li>
                <li>
                    removable and washable fabric parts
                </li>
                <li>
                    front bar detachable and can be opened from both sides
                </li>
                <li>
                    large shopping basket below the backrest and underneath the seat
                </li>
                <li>
                    viewing window on the roof-back
                </li>
                <li>
                    5-point belt system
                </li>
                <li>
                    non-toxic materials
                </li>
                <li>
                    pram optional available
                </li>
            </ol>
            <strong>Additional Information</strong><br>
            <p>
                WEIGHT 8.2 kg
                <br>DIMENSIONS 68 x 59 x 30 cm
            </p><br>
            <h2 style="float:left">
                <a href="#production">
                    <span class="label label-primary">back</span>
                </a>　
            </h2>
        </div>
    </div>
</div>
<div id="afvp1" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>AUTOFOLD viewpoint</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett01.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett01.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett01</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett02.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett02.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett02</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett03.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett03.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett03</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett04.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett04.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett04</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett05.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett05.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett05</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett06.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett06.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett06</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett07.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett07.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett07</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/scarlett08.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/scarlett08.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>scarlett08</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!-- //gallery -->

<div id="autofoldlite" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Auto Fold Lite Fabric Color</h3>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="col-sm-2 col-xs-3">
                <a class="color1" title="color-Green">
                    <img src="{{asset('images/innovative/color-green.png')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3" >
                <a class="color2" title="color-Red">
                    <img src="{{asset('images/innovative/color-red.jpg')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>
            <div class="col-sm-2 col-xs-3">
                <a class="color3" title="color-Black" >
                    <img src="{{asset('images/innovative/color-black.png')}}" class="img-circle img-responsive img-thumbnail">
                </a>
            </div>

            <div class="clearfix "> </div>
            <div class="w3ls-hover ">
                <a href="{{asset('images/innovative/afl1.jpg')}}" id="aflhref" data-lightbox="example-set" data-title="">
                    <img src="{{asset('images/innovative/afl1.jpg')}}" class="img-responsive zoom-img" id="aflicon" alt=" " />
                    <div class="view-caption ">
                        <h5>Nikimotion
                            <br>
                            <small>點我查看</small>
                        </h5>
                        <span class="glyphicon glyphicon-search"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <h3>AUTOFOLD Lite</h3>
            <br>
            <p>
                <strong>nikimotion AUTOFOLD LITE – the “light” buggy by nikimotion</strong>
                <br>With the buggy <strong>AUTOFOLD LITE</strong>, the focus is clearly on the weight without compromising comfort or handling.
                The One-Fold mechanism folds the stroller together very simply and flat and can thus be stored in a space-saving
                manner or stored in the car.
            </p>
            <br>
            <strong>Description</strong><br>
            <p>
                The sports model AUTOFOLD LITE is equipped with light EVA wheels. All other features also come in modern design and best quality. The used outer material protects your child against harmful UV rays and is water-repellent.
                In addition, nikimotion products meet the latest EN standards.
            </p>
            <br>
            <strong>Additional Information</strong><br>
            <p>
                WEIGHT 7.6 kg
                <br> DIMENSIONS 68 x 55 x 30 cm
            </p><br>
            <h2 style="float:left">
                <a href="#production">
                    <span class="label label-primary">back</span>
                </a>　
            </h2>
            
        </div>
    </div>
</div>
<div id="afvp2" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>AUTOFOLD Lite viewpoint</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg1.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint1</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/afl1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/afl1.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint2</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg2.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint3</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg3.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg3.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint4</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg4.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg4.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint5</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg5.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg5.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint6</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg6.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg6.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint7</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/aflg7.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/aflg7.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>viewpoint8</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>

<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>
<script src="{{asset('js//innovative/bars.js')}}"></script>


@endsection

