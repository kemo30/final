<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\doctors;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $appointment= appointment::paginate();
     
        return view('back.appointment.index',[
            'appointments' => $appointment,
           
        ]);

    }
    public function create(){

       $doctors= doctors::all();
       $services = service::all();

       return view('back.appointment.create',[
        'doctors' => $doctors,
        'services' => $services
       ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       
       
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'service' =>'required',
            'date'=>'required',
           
            ]);
        $date= $request->all();
        $date['date'] =  date('m/d/Y' , strtotime($request->date));

       

        appointment::create($date);
        session()->flash('success','service create success');
        return Redirect('dashboard/appointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {
        return view('back.appointment.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
       
        $doctors= doctors::all();
       $services = service::all();
        return view('back.appointment.edit',[
            'appointment'=>$appointment,
            'doctors' =>$doctors,
            'services' =>$services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'service' =>'required',
            'date'=>'required',
           
            ]);
            $data = $request->all();
            $data['date'] =  date('m/d/Y' , strtotime($request->date));

            $appointment->update($data);
            session()->flash('success','service update success');
            return Redirect('dashboard/appointment');
    
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        $appointment->delete();
        return response()->json([
            'status' => true,
        ]);}


    public function today(){


       
        $appointment= appointment::where('date',now()->format('m/d/Y'))->paginate();
     
        return view('back.appointment.index',[
            'appointments' => $appointment,
           
        ]);

    }

    public function search(Request $request)
    {
        $search = $request->search;
        $appointment = appointment::where('name','like','%'.$search.'%')
        ->orWhere('name','like','%'.$search.'%')
       
       
        ->paginate();
        return view('back.appointment.index',[
            'appointments' => $appointment,
           
        ]);
    }
}
