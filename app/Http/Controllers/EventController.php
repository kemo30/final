<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use App\Traits\uplode_files;

class EventController extends Controller
{
    use uplode_files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events= event::paginate();
        return view('back.events.index',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'target_ar' => 'required',
            'target_en' => 'required',
            'Speakers' => 'required',
            'venue_ar' => 'required',
            'venue_en' => 'required',
            'image' => 'required|image',
            'discription_ar' => 'required',
            'discription_en' => 'required',

        ]);
        $image=$this->SaveImg($request->image,'news/');
        $data=$request->all();
        $data['image']=$image;
        event::create($data); 
        session()->flash('success','news create success');
        return Redirect('dashboard/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        return view('back.events.show',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        return view('back.events.edit',['events'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'target_ar' => 'required',
            'target_en' => 'required',
            'Speakers' => 'required',
            'venue_ar' => 'required',
            'venue_en' => 'required',
            'image' => 'image',
            'discription_ar' => 'required',
            'discription_en' => 'required',

        ]);
        if($request->image){
            $image=$this->SaveImg($request->image,'news');
            $this->DeleteImg($event->image,'news');
           }else{
            $image=$event->image;
           }
    
           $data = $request->all();
           $data['image']=$image;
           
           $event->update($data);
    
           session()->flash('success','event update success');
    
           return Redirect('dashboard/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        $this->DeleteImg($event->image,'news');
        $event->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
