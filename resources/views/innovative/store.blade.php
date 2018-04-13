@extends('innovative.main')
@section('content')

<div id="gallery" class="gallery">
    <div class="container">
        <div class="w3-headings-all">
            <h3>Store</h3>
        </div>
        <div class="gallery-w3lsrow">
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/store1.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/store1.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>Night</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 gallery-grids">
                <div class="w3ls-hover">
                    <a href="{{asset('images/innovative/store2.jpg')}}" data-lightbox="example-set" data-title="">
                        <img src="{{asset('images/innovative/store2.jpg')}}" class="img-responsive zoom-img" alt="" />
                        <div class="view-caption">
                            <h5>Morning</h5>
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!-- /contact map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.75413360442!2d120.2535333143446!3d23.03279802172703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e70ca0d6e8473%3A0x24f029b720db9c17!2zNzEw5Y-w5Y2X5biC5rC45bq35Y2A5Lit5bGx6LevMjk26Jmf!5e0!3m2!1szh-TW!2stw!4v1521788762288"></iframe>
	</div>
<!-- //contact map -->

<script src="{{asset('js/innovative/lightbox-plus-jquery.min.js')}}"></script>

@endsection