<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\delma;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
        $about =about::all();
        return view('front.about',[
            'about' => $about,
       
        ]);
    }
    public function test(){
        $test=delma::all();
        return view('front.delma_detals',[
            'test' => $test,
        ]);
    }
}
