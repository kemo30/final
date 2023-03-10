<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\delma;
use Illuminate\Http\Request;

class delmaController extends Controller
{
    public function index(){
        
        $hamada=delma::get();
       
        return view('front.delma_detals',compact('hamada'));
    }
    public function test(){
       
        $delmas= delma::get();

        return view('front.delma_detals',['delma'=>$delmas]);
    }
    
}
