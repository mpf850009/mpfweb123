<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bikerentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active   = "index";
        $link     = "https: //www.twtainan.net/";
        $linkname = "台南市政府觀光旅遊局";
        return view('bikerental.index', compact('active', 'link', 'linkname'));
    }
    public function company()
    {
        $active   = "company";
        $link     = " ";
        $linkname = " ";
        return view('bikerental.company', compact('active', 'link', 'linkname'));
    }
    public function fulong()
    {
        $active   = "fulong";
        $link     = "http: //www.ifulong.com.tw";
        $linkname = "福隆驛站";

        return view('bikerental.fulong', compact('active', 'link', 'linkname'));
    }
    public function jiaoxi()
    {
        $active   = "jiaoxi";
        $link     = "http: //www.natural-hotel.com.tw";
        $linkname = "自然風溫泉會館";

        return view('bikerental.jiaoxi', compact('active', 'link', 'linkname'));
    }
    public function onsale()
    {
        $active   = "onsale";
        $link     = " ";
        $linkname = " ";

        return view('bikerental.onsale', compact('active', 'link', 'linkname'));
    }
    public function ebike()
    {
        $active   = "ebike";
        $link     = " ";
        $linkname = " ";

        return view('bikerental.ebike', compact('active', 'link', 'linkname'));
    }
    public function contact()
    {
        $active   = "contact";
        $link     = " ";
        $linkname = " ";

        return view('bikerental.contact', compact('active', 'link', 'linkname'));
    }
    public function beimen()
    {
        $active   = "beimen";
        $link     = "http: //beimenislet.vrworld.com.tw/";
        $linkname = "北門嶼輕食風味餐廳";

        return view('bikerental.beimen', compact('active', 'link', 'linkname'));
    }
    public function asheng_h()
    {
        $active   = "asheng_h";
        $link     = "http: //bike.e089.com.tw/";
        $linkname = "阿勝單車";

        return view('bikerental.asheng_h', compact('active', 'link', 'linkname'));
    }
    public function asheng_t()
    {
        $active   = "asheng_t";
        $link     = 'http: //bike.e089.com.tw/';
        $linkname = "阿勝單車";

        return view('bikerental.asheng_t', compact('active', 'link', 'linkname'));
    }
    public function park_water()
    {
        $active   = "park_water";
        $link     = "https: //tour.taitung.gov.tw/zh-tw/attraction/details/265";
        $linkname = "台東縣觀光旅遊網";

        return view('bikerental.park_water', compact('active', 'link', 'linkname'));
    }
    public function explore()
    {
        $active   = "explore";
        $link     = "http: //www.ettaitung.com/";
        $linkname = "探索車隊";

        return view('bikerental.explore', compact('active', 'link', 'linkname'));
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
