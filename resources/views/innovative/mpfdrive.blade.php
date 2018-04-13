@extends('innovative.main')
@section('content')
    <!--
    <div id="production" class="gallery">
        <div class="container">
            <div class="gallery-w3lsrow">
                <div class="col-sm-3"></div>
                <div class=" col-sm-6 gallery-grids ">
                    <div class="w3ls-hover ">
                        <a href="#ps">
                            <img src="{{asset('images/innovative/mpf4.jpg')}}" class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>PERFECT SYSTEM
                                    <br>
                                    <small>查看更多</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="clearfix "> </div>
            </div>
        </div>
    </div>
-->

    <div class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>Product</h3>
            </div>
            <div id="mpf" class="col-sm-4 col-xs-12">
                <div class="w3-headings-all">
                    <h3 style="font-size:1.8em;">Mid Motor</h3>
                </div>
                <div class="gallery-w3lsrow ">
                    <div class="col-sm-6 col-xs-6 gallery-grids ">
                        <div class="w3ls-hover ">
                            <a href="#mpf1">
                                <img src="{{asset('images/innovative/mpf1.jpg')}}" class="img-responsive zoom-img " alt=" " />
                                <div class="view-caption" style="padding:5px 0px;">
                                    <h5 style="font-size:1.5em;">MPF DRIVE 6
                                        <br>
                                        <small>查看更多</small>
                                    </h5>
                                    <span class="glyphicon glyphicon-search"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 gallery-grids ">
                        <div class="w3ls-hover ">
                            <a href="#mpf2">
                                <img src="{{asset('images/innovative/mpf5.jpg')}}" class="img-responsive zoom-img " alt=" " />
                                <div class="view-caption " style="padding:5px 0px;">
                                    <h5 style="font-size:1.5em;">MPF DRIVE 5
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

            <div id="display" class="col-sm-4 col-xs-12">
                <div class="w3-headings-all">
                    <h3 style="font-size:1.8em;">CONTROL&DISPLAY</h3>
                </div>
                <div class="gallery-w3lsrow ">
                    <div class="col-sm-6 col-xs-6 gallery-grids ">
                        <div class="w3ls-hover ">
                            <a href="#dis">
                                <img src="{{asset('images/innovative/mpf3.jpg')}} " class="img-responsive zoom-img " alt=" " />
                                <div class="view-caption " style="padding:5px 0px;">
                                    <h5 style="font-size:1.5em;">I4U CONTROL&DISPLAY 
                                        <br>
                                        <small>查看更多</small>
                                    </h5>
                                    <span class="glyphicon glyphicon-search "></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 gallery-grids ">
                        <div class="w3ls-hover ">
                            <a href="#cu">
                                <img src="{{asset('images/innovative/mpf6.jpg')}} " class="img-responsive zoom-img " alt=" " />
                                <div class="view-caption " style="padding:5px 0px;">
                                    <h5 style="font-size:1.5em;">AF CONTROL&DISPLAY
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

            <div id="battery" class="col-sm-4 col-xs-12">
                <div class="w3-headings-all">
                    <h3 style="font-size:1.8em;">BATTERY</h3>
                </div>
                <div class="gallery-w3lsrow ">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 col-xs-6 gallery-grids ">
                        <div class="w3ls-hover ">
                            <a href="#bat">
                                <img src="{{asset('images/innovative/mpf7.jpg')}} " class="img-responsive zoom-img " alt=" " />
                                <div class="view-caption " style="padding:5px 0px;">
                                    <h5 style="font-size:1.5em;">BATTERY
                                        <br>
                                        <small>查看更多</small>
                                    </h5>
                                    <span class="glyphicon glyphicon-search "></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>

                    <div class="clearfix "> </div>
                </div>
            </div>



        </div>
    </div>



    <!--<div id="ps" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>PERFECT SYSTEM</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf4.jpg')}} " data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf4.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>PERFECT SYSTEM
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:1cm 1cm 1cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
							It's amazing to see the bright face when MPF Drive fulfills exactly its particular rider's wish. Soft and gentle on urban roads, immediate and powerful during off road use the MPF Drive System
							supports individually.
						</p><br>
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
    </div>-->

    <div id="mpf1" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>MPF DRIVE 6</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf1.jpg')}}" data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf1.jpg')}}" class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>MPF DRIVE 6
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:1cm 1cm 1cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
							MPF Drive motor generation MPF6 supports with increased torque improved peak power lowered weight
                            and upgraded efficiency. Of course in the robust design with the full integrated metal gear system
                            definitely oil lubricated.
                        </p><br>
                        <h3>Specification</h3><br>
                        <p>
                            <strong>MPF6s: </strong>36V 460W 85Nm 4.6 kgs IP 67
                        </p>
                        <br>
                        <h2 style="float:left">
                            <a href="#mpf">
                                <span class="label label-primary">back</span>
                            </a>
                        </h2>
                    </div>
                </div>
                

                <div class="clearfix "> </div>
            </div>
        </div>
    </div>

    <div id="mpf2" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>MPF Drive 5</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf5.jpg')}}" data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf5.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>MPF Drive 5
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:1cm 1cm 1cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
							CAB Bus communication technology RCW-Technology (Rapid Chain Wheel Technology - chain wheel moves
                            faster than the cranks)  
                        </p><br>
                        <h3>Specification</h3><br>
                        <p><strong>MPF5.3:</strong> 36V 250W(350W) 75Nm 4.8 kgs IP 65</p><br>
                        <h2 style="float:left">
                            <a href="#mpf">
                                <span class="label label-primary">back</span>
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="clearfix "> </div>
            </div>
        </div>
    </div>

    <div id="dis" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>I4U CONTROL&DISPLAY</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf3.jpg')}}" data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf3.jpg')}}" class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>I4U CONTROL&DISPLAY
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:0cm 1cm 0cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
							Central bright clear intuitive information screen external controller provides more buttons to control e-Bike functions ergonomic design for easy use even under extreme conditions definitely waterproofed LCD display with remote control unit.
                        </p><br>
                        <h3>Specification</h3><br>
                        <p> 
                            <strong>Control functions:</strong>  Motor ON/OFF<br>
                            <strong>Support Level:</strong> 10 steps Light ON/OFF<br>
                            <strong>Boost:</strong> 4-6 kph vehicle push function <br> 
                            <strong>USB Interface:</strong>
                            <br>charging device for
                            mobiles and smart phones.<br>
                            <strong>Display information:</strong>
                            <br>Velocity, distance, battery charging level, time,cadence, motor support level. 
                        </p><br>
                        <h2 style="float:left">
                            <a href="#display">
                                <span class="label label-primary">back</span>
                            </a>
                        </h2>
                    </div>
                    
                </div>
                <div class="clearfix "> </div>
            </div>
        </div>
    </div>

    <div id="cu" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>AF CONTROL&DISPLAY</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf6.jpg')}} " data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf6.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>AF CONTROL&DISPLAY
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:0cm 1cm 0cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
                            LCD Display in modern design with blue background illumination
                        </p> <br>
                        <h3>Specification</h3><br>
                        <p>
                            <strong>Control functions:</strong> Motor
                            ON/OFF <br>
                            <strong>Support Level:</strong> 10 steps Light ON/OFF <br>
                            <strong>Boost:</strong> 4-6 kph vehicle push function <br>
                            <strong>USB Interface:</strong>
                            <br>charging device for mobiles and smart phones.<br>
                            <strong>Display Information:</strong>
                            <br>Velocity, distance, battery charging level, time, cadence, motor support level<br>
                        </p><br>
                        <h2 style="float:left">
                            <a href="#display">
                                <span class="label label-primary">back</span>
                            </a>
                        </h2>
                    </div>
                    
                </div>
                <div class="clearfix "> </div>
            </div>
        </div>
    </div>

    <div id="bat" class="gallery">
        <div class="container">
            <div class="w3-headings-all">
                <h3>BATTERY</h3>
            </div>
            <div class="gallery-w3lsrow">
                <div class="col-sm-6 gallery-grids">
                    <div class="w3ls-hover ">
                        <a href="{{asset('images/innovative/mpf7.jpg')}} " data-lightbox="example-set " data-title="">
                            <img src="{{asset('images/innovative/mpf7.jpg')}} " class="img-responsive zoom-img " alt=" " />
                            <div class="view-caption ">
                                <h5>BATTERY
                                    <br>
                                    <small>點我放大</small>
                                </h5>
                                <span class="glyphicon glyphicon-search "></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-sm-6 gallery-grids ">
                    <div style="padding:0cm 1cm 0cm 1cm;">
                        <h3>Introduction</h3><br>
                        <p>
                            Juice for your system comes with a high functional design to handle the battery safe and easy BMS with CAN bus communication technology definitely for  highest range.
                        </p><br>
                        <h3>Specification</h3><br>
                        <p>
                            <strong>Voltage: </strong>36V <br>
                            <strong>Capacity: </strong>10.4Ah/11.4Ah/14Ah <br>
                            <strong>Cont Current: </strong>30A <br>
                            <strong>Protection: </strong>OV/UC/OC/SC/OT/UT <br>
                            <strong>Communication: </strong>CANBus <br>
                            <strong>waterproofed grade: </strong>IPX4<br>
                        </p>
                        <br>
                        <h2 style="float:left">
                            <a href="#battery">
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