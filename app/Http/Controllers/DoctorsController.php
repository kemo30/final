<?php

namespace App\Http\Controllers;

use App\Models\doctors;
use App\Models\service;
use Illuminate\Http\Request;
use App\Traits\uplode_files;

class DoctorsController extends Controller
{
    use uplode_files;

    public function index()
    {
        $doctors =doctors::paginate();
        return view('back.doctors.index',['doctors'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $service= service::all();
        return view('back.doctors.create',['service'=>$service]);
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
            'name_ar' => 'required|string|min:2',
            'name_en' => 'required|string|min:2',
            'services_id' => 'required|int|exists:services,id',
            'phone' => 'required|string',
            'titel_ar' => 'required|string',
            'titel_en' => 'required|string',
            'image' => 'required|image',
       ]);
       
      
       $image=$this->SaveImg($request->image,'doctors/');

       $data = $request->all();
      
       $data['image']=$image;
       $data['name_en'] = $request->name_en;
       $data['name_ar'] = $request->name_ar;


       doctors::create($data); 

       session()->flash('success','service create success');
       return Redirect('dashboard/doctors');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(doctors $doctor)
    {
        return view('back.doctors.show',[
            'doctors' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit(doctors $doctor)
    {
        
       
       
        $service= service::all();
        return view('back.doctors.edit',[
            'doctors' => $doctor,
            'service' =>$service,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctors $doctor)
    {
       
        $request->validate([
            'name_ar' => 'required|string|min:2',
            'name_en' => 'required|string|min:2',
            'phone' => 'required|string',
            'titel_ar' => 'required|string',
            'titel_en' => 'required|string',
            'image' => 'image',
       ]);
       
       if($request->image){
        $image=$this->SaveImg($request->image,'doctors');
        $this->DeleteImg($doctor->image,'doctors');
       }else{
        $image=$doctor->image;
       }
       $data = $request->all();
       $data['image']=$image;
       $data['name_en'] = $request->name_en;
       $data['name_ar'] = $request->name_ar;
      
      
       $doctor->update($data);

       session()->flash('success','service update success');

       return Redirect('dashboard/doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctors $doctor)
    {
        $this->DeleteImg($doctor->image,'doctors');
        $doctor->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
