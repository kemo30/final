<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\event;
use App\Models\news;
use Illuminate\Http\Request;

class News_EventsController extends Controller
{
    public function index(){
        $news=news::all();
        $evints=event::all();
      
        return view('front.news',[
            'news' => $news,
            'events' => $evints,
        ]);
       

    }

    public function show_news(news $news){
        return view("front.news-details",[
            'news' => $news,
        ]);
    }
    public function show_event(event $event){
        return view("front.event-details",[
            'event' => $event,
        ]);
    }
}
