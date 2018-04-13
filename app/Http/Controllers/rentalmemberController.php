<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class rentalmemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        if (Auth::check()) {

        } else {
            $active   = "register";
            $link     = " ";
            $linkname = " ";

            return view('bikerental.member.register', compact('active', 'link', 'linkname'));
        }

    }
    public function login()
    {
        $active   = "login";
        $link     = " ";
        $linkname = " ";

        return view('bikerental.member.login', compact('active', 'link', 'linkname'));
    }
    public function center()
    {
        if (Auth::check()) {
            $active   = "center";
            $link     = " ";
            $linkname = " ";

            return view('bikerental.member.center', compact('active', 'link', 'linkname'));
        } else {
            return redirect()->route('bikerental.login');
        }

    }

    public function index()
    {
        //
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
