<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctors;
use App\Models\appointment;
use App\Models\service;
use Illuminate\Support\Carbon;

class appointmentController extends Controller
{  
    

    
    public function index(){
        $servises =service::all();
        $doctors = doctors::all();
        return view('front.appointment',[
            'services' => $servises,
            'doctors' => $doctors,
        ]);
        
    }
    public function store(Request $request)
    {
      
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'service' => 'required',
            'doctor'=>'required',
            'date'=>'required',
            
            ]);
            
            $data = $request->all();
           
           
        appointment::create($data);
       session()->flash('success','success');
        return back();
    }
}
