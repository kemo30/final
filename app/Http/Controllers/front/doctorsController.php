<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctors;

class doctorsController extends Controller
{
    public function index(){
        $doctors=doctors::paginate();
        return view('front.doctors',[
            'doctors' => $doctors,
        ]);
    }
    public function show(doctors $doctor){
        return view('front.doctor-profile',[
            'doctor' => $doctor,
        ]);
    }
}
