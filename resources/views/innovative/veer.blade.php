@extends('innovative.main')
@section('content')
@include('innovative.script.veerscript')

<div id="production" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Product</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-2"></div>
            <div class=" col-sm-6 col-xs-8 gallery-grids">
                <div class="w3ls-hover">
                    <a href="#v">
                        <img src="{{asset('images/innovative/veer5.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Veer
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-2"></div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="accessories" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Accessories</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v1">
                        <img src="{{asset('images/innovative/goveer1.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Foldable Storage Basket
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-3 col-xs-4 gallery-grids ">
                <div class="w3ls-hover ">
                    <a href="#v2">
                        <img src="{{asset('images/innovative/goveer2.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Retractable Canopy
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v3">
                        <img src="{{asset('images/innovative/goveer3.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Infant Car Seat Adapter
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v4">
                        <img src="{{asset('images/innovative/goveer4.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Travel Bag
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v5">
                        <img src="{{asset('images/innovative/goveer5.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Cup Holders (Set of 2)
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v6">
                        <img src="{{asset('images/innovative/goveer6.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Nap System
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v7">
                        <img src="{{asset('images/innovative/goveer7.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Comfort Seat
                                <br>
                                <small>查看更多</small>
                            </h5>
                            <span class="glyphicon glyphicon-search "></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-xs-4 gallery-grids">
                <div class="w3ls-hover ">
                    <a href="#v8">
                        <img src="{{asset('images/innovative/goveer8.jpg')}} " class="img-responsive zoom-img " alt=" " />
                        <div class="view-caption ">
                            <h5>Drink & Snack
                                <br>
                                <small>查看更多</small>
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
<!-- //gallery -->

<div id="v" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>veer</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-1 col-xs-1"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="vv1" title=""><img src="{{asset('images/innovative/veer1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="vv2" title=""><img src="{{asset('images/innovative/veer2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="vv3" title=""><img src="{{asset('images/innovative/veer3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="vv4" title=""><img src="{{asset('images/innovative/veer4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="vv5" title=""><img src="{{asset('images/innovative/veer5.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-1 col-xs-1"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="chghref" href="{{asset('images/innovative/veer5.jpg')}} " data-lightbox="example-set " data-title="Veer">
                            <img id="chgicon" src="{{asset('images/innovative/veer5.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>veer
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Meet the Veer Cruiser, designed for those who prefer to take the paths less traveled. With the feel, functionality and safety
                        of a premium stroller and the fun of a rugged wagon, Cruiser will take you further – from your
                        first born through your last, and on terrain once thought of as off-limits for family adventure.
                    </p>
                    <br>
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
</div>

<div id="v1" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Foldable Storage Basket</h3>
        </div>
        <div class="gallery-w3lsrow">
            
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb1" title=""><img src="{{asset('images/innovative/fsb1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb2" title=""><img src="{{asset('images/innovative/fsb2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb3" title=""><img src="{{asset('images/innovative/fsb3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb4" title=""><img src="{{asset('images/innovative/fsb4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb5" title=""><img src="{{asset('images/innovative/fsb5.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="fsb6" title=""><img src="{{asset('images/innovative/fsb6.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="fsbhref" href="{{asset('images/innovative/goveer1.jpg')}} " data-lightbox="example-set " data-title="Foldable Storage Basket">
                            <img id="fsbicon" src="{{asset('images/innovative/goveer1.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Foldable Storage Basket
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Designed to add even more cargo space to the Cruiser, our lightweight aluminum and soft-sided storage basket mounts solidly
                        into the Cruiser”s two anchor points behind the rear seat. It folds for easy transport or storage
                        without removal. The soft sided construction is removable and machine washable. A mesh zipper
                        hood either discreetly rests on the bottom of the basket or doubles the capacity by covering
                        clothes and other bulky items. Drink and Snack Tray and Napper both fit comfortably in this accessory.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v2" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Retractable Canopy</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-1 col-xs-1"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="rc1" title=""><img src="{{asset('images/innovative/rc1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="rc2" title=""><img src="{{asset('images/innovative/rc2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="rc3" title=""><img src="{{asset('images/innovative/rc3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="rc4" title=""><img src="{{asset('images/innovative/rc4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="rc5" title=""><img src="{{asset('images/innovative/rc5.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-1 col-xs-1"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="rchref" href="{{asset('images/innovative/goveer2.jpg')}} " data-lightbox="example-set " data-title="Retractable Canopy">
                            <img id="rcicon" src="{{asset('images/innovative/goveer2.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Retractable Canopy
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Veer's Retractable Canopy quickly and intuitively clips onto Cruiser's frame and easily extends up and down. One or two can
                        be attached above either seat. A peak-a-boo window allows you to see your precious cargo and
                        discreet, hidden magnets hold the window in the up position. Canopy works perfectly with Napper
                        to create the perfect rest stop for young ones.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v3" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Infant Car Seat Adapter</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-3 col-xs-3"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="icsa1" title=""><img src="{{asset('images/innovative/icsa1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="icsa2" title=""><img src="{{asset('images/innovative/icsa2.png')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="icsa3" title=""><img src="{{asset('images/innovative/icsa3.png')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-3 col-xs-3"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="icsahref" href="{{asset('images/innovative/goveer3.jpg')}} " data-lightbox="example-set " data-title="Infant Car Seat Adapter">
                            <img id="icsaicon" src="{{asset('images/innovative/goveer3.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Infant Car Seat Adapter
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
                
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Our ICS adapters for major brands of infant car seats quickly and intuitively fasten to the Cruiser’s frame, enabling infants
                        to live the Veer experience. You may place your car seat in any of four positions: facing you,
                        facing the outside world, and above the front or back seat of Cruiser.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v4" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Travel Bag</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-3 col-xs-3"></div>
                
                <div class="col-sm-3 col-xs-3">
                    <a class="tbb1" title=""><img src="{{asset('images/innovative/tbb1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <a class="tbb2" title=""><img src="{{asset('images/innovative/tbb2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-3 col-xs-3"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="tbbhref" href="{{asset('images/innovative/goveer4.jpg')}} " data-lightbox="example-set " data-title="Travel Bag">
                            <img id="tbbicon" src="{{asset('images/innovative/goveer4.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Travel Bag
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Cruiser is perfect for traversing airports with a young family in tow. Whether it’s two youngsters or gear, Cruiser helps
                        keep it all together. Veer Travel Bag is the perfect jetway companion. Padded in all the right
                        places and made of rugged nylon, it keeps the Cruiser safe when checked at the jetway. Simply
                        stand Cruiser upright, slide the bag on top, and fasten with the velcro tabs at the bottom.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v5" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Cup Holders (Set of 2)</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-1 col-xs-1"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="ch1" title=""><img src="{{asset('images/innovative/ch1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="ch2" title=""><img src="{{asset('images/innovative/ch2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="ch3" title=""><img src="{{asset('images/innovative/ch3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="ch4" title=""><img src="{{asset('images/innovative/ch4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="ch5" title=""><img src="{{asset('images/innovative/ch5.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-1 col-xs-1"></div>
                <div class="clearfix "> </div><br>
                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="chhref" href="{{asset('images/innovative/goveer5.jpg')}} " data-lightbox="example-set " data-title="Cup Holders (Set of 2)">
                            <img id="chicon" src="{{asset('images/innovative/goveer5.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Cup Holders (Set of 2)
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Veer Cupholders are perfectly sized to accept containers from a Swell water bottle to a Yeti tumbler. Two cup holders come
                        standard with every Cruiser. The Cruiser conveniently accepts six for those special events. Sold
                        in sets of 2.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v6" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Nap System</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="np1" title=""><img src="{{asset('images/innovative/np1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="np2" title=""><img src="{{asset('images/innovative/np2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="np3" title=""><img src="{{asset('images/innovative/np3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="np4" title=""><img src="{{asset('images/innovative/np4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="nphref" href="{{asset('images/innovative/goveer6.jpg')}} " data-lightbox="example-set " data-title="Nap System">
                            <img id="npicon" src="{{asset('images/innovative/goveer6.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Nap System
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
                
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:0.5cm 0.5cm 0.5cm 0.5cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Veer Nap System turns your Cruiser into a JPMA safety certified Bassinet, making your Cruiser the ultimate rest stop or changing
                        station for young ones. (The Nap System is suitable from birth up to 20 lbs. [9 Kg] and/or 27”
                        [69 cm], whichever comes first or until your infant pushes up on their hands and knees.) A soft,
                        removable mattress pad is included. The Nap System includes magnets built into its cleanable
                        sidewalls that keep it snug to the Cruiser sidewalls, and includes four bungee connection cords
                        that attach to the seat backs to keep little ones safe. A bug shield that zips on a sun canopy
                        to cover the Cruiser is included (retractable sun canopy sold separately). The Nap System makes
                        a great changing station as well. The Nap System compactly folds up into a storage bag that mounts
                        to Cruiser and it also fits in the Foldable Storage Basket when not in use.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v7" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Comfort Seat</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-1 col-xs-1"></div>
                <div class="col-sm-2 col-xs-2">
                    <a class="td1" title=""><img src="{{asset('images/innovative/td1.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="td2" title=""><img src="{{asset('images/innovative/td2.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="td3" title=""><img src="{{asset('images/innovative/td3.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="td4" title=""><img src="{{asset('images/innovative/td4.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <a class="td5" title=""><img src="{{asset('images/innovative/goveer7.jpg')}}" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-1 col-xs-1"></div>
                <div class="clearfix "> </div><br>

                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a id="tdhref" href="{{asset('images/innovative/goveer7.jpg')}}" data-lightbox="example-set " data-title="Comfort Seat">
                            <img id="tdicon" src="{{asset('images/innovative/goveer7.jpg')}}" class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Comfort Seat
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>  
                </div>
                <div class="col-sm-2 col-xs-2"></div>

                
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        Veer's Comfort Seat for Toddlers easily inserts into the Cruiser's standard seat to provide cushioned comfort and support.
                        It is designed for children from 6 months up to 35 lbs. It includes a 5-point harness for safety.
                        Soft, padded fabric creates an ultra-comfortable seat and head rest. Hidden magnets on the side
                        wings ensure an easy, snug fit with the side walls. Two Comfort Seats can be used simultaneously
                        (one on each seat). Cruiser will fold when using one Toddler Seat. Comfort Seats can also be
                        used with Veer’s Retractable Canopies.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>

<div id="v8" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Drink & Snack</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="col-sm-2 col-xs-2"></div>
                <div class="col-sm-8 col-xs-8">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/goveer8.jpg')}} " data-lightbox="example-set " data-title="Drink & Snack">
                            <img src="{{asset('images/innovative/goveer8.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>Drink & Snack
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-2"></div>
            </div>
            <div class=" col-sm-6 col-xs-12 gallery-grids ">
                <div style="padding:1cm 1cm 1cm 1cm;">
                    <h3>Introduction</h3><br>
                    <p>
                        The Veer Snack & Drink Tray comes standard with each Cruiser and is a perfect accessory to help toddler’s have snacks and
                        drinks at hand for a quick rest stop. For easy storage, the Tray fits nicely in the Veer Foldable
                        Storage Basket (sold separately). If you lose your original Snack & Drink Tray, this is the replacement
                        item you would order.
                    </p>
                    <br>
                    <h2 style="float:left">
                        <a href="#accessories">
                            <span class="label label-primary">back</span>
                        </a>
                    </h2>
                </div>
            </div>
            <div class="clearfix "> </div>
        </div>
    </div>
</div>
<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>
@endsection