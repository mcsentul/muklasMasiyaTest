<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xmlString=simplexml_load_file("http://localhost/muklasMasiyaTest/local/public/file/data.xml") or die("Error: Cannot create object");
        $array2 = json_decode(json_encode((array)$xmlString), TRUE);
        //return view('master')->with('data',$array2);
        return view('home')->with('data',$array2);
    }
}
