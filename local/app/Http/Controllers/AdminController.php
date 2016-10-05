<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


class AdminController extends BaseController
{     

	 public function showdata(){
		$xmlString=simplexml_load_file("http://localhost/muklasMasiyaTest/local/public/file/data.xml") or die("Error: Cannot create object");
		$array2 = json_decode(json_encode((array)$xmlString), TRUE);
		return view('master')->with('data',$array2);

   }
  
  
}