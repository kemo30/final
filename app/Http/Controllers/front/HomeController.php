<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ServiceController;
use App\Models\doctors;
use App\Models\event;
use App\Models\news;
use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    $servises = service::all();
    $doctors = doctors::all();
    $events = event::all();
    $news = news::all();


        return view('front.index',[
            'services' => $servises,
            'doctors' => $doctors,
            'events'  => $events,
            'news' => $news,
        ]);
    }

    
}
