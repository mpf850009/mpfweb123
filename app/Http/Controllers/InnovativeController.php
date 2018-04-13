<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InnovativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "index";
        return view('innovative.index', compact('active'));
    }
    public function about()
    {
        $active     = "about us";
        $background = "background:url('images/innovative/store1.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: center;
					min-height: 300px;";
        return view('innovative.about', compact('active', 'background'));
    }
    public function mpfdrive()
    {
        $active     = "mpf drive";
        $background = "background:url('images/innovative/bg9.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: center left;
					min-height: 300px;";

        return view('innovative.mpfdrive', compact('active', 'background'));
    }
    public function nikimotion()
    {
        $active     = "nikimotion";
        $background = "background:url('images/innovative/pic05.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: center;
					min-height: 300px;";

        return view('innovative.nikimotion', compact('active', 'background'));
    }
    public function veer()
    {
        $active     = "veer";
        $background = "background:url('images/innovative/bg5.png') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: bottom;
					min-height: 300px;";

        return view('innovative.veer', compact('active', 'background'));
    }
    public function ebike()
    {
        $active     = "e-bike";
        $background = "background:url('images/innovative/bg11.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: center;
					min-height: 300px;";

        return view('innovative.ebike', compact('active', 'background'));
    }
    public function flagship()
    {
        $active     = "store";
        $background = "background:url('images/innovative/store1.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: center;
					min-height: 300px;";

        return view('innovative.store', compact('active', 'background'));
    }
    public function rentplace()
    {
        $active     = "rentplace";
        $background = "background:url('images/innovative/pic01.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					-ms-background-size: cover;
					background-position: right bottom;
					min-height: 300px;";

        return view('innovative.rentplace', compact('active', 'background'));
    }
    public function brand()
    {
        $active     = "brand";
        $background = "background:url('images/innovative/bg13.jpg') no-repeat 0px 0px;
					background-size: cover;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
                    -ms-background-size: cover;
                    background-position: right bottom;
                    min-height: 300px;";

        return view('innovative.brand', compact('active', 'background'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
