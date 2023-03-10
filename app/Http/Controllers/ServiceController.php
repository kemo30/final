<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use App\Traits\uplode_files;

class ServiceController extends Controller
{
    use uplode_files;

    
    
     public function index()
    {
        
        $services =service::paginate();
        return view('back.services.index',[ 'services' =>$services]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('back.services.create');
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
             'titel_ar' => 'required|string',
             'titel_en' => 'required|string',
             'icon' => 'required|image',
             'image' => 'required|image',
        ]);

        $icon=$this->SaveImg($request->icon,'services/');
        $image=$this->SaveImg($request->image,'services/');

        $data = $request->all();
       
        $data['image']=$image;
        $data['icon'] =$icon;
        
        service::create($data); 

        session()->flash('success','service create success');

        return Redirect('dashboard/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        return view('back.services.show',['service'=> $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {

        return view('back.services.edit',[ 'service' => $service ,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
       
        $request->validate([
            'name_ar' => 'required|string|min:2',
            'name_en' => 'required|string|min:2',
            
            'titel_ar' => 'required|string',
            'titel_en' => 'required|string',
            'icon' => 'image', 
            'image' => 'image',
       ]);
       if($request->icon){
        $icon=$this->SaveImg($request->icon,'services');
        $this->DeleteImg($service->icon,'services');
       }else{
        $icon=$service->icon;
       }

       if($request->image){
        $image=$this->SaveImg($request->image,'services');
        $this->DeleteImg($service->image,'services');
       }else{
        $image=$service->image;
       }

       $data = $request->all();
       $data['image']=$image;
       $data['icon'] =$icon;
       $service->update($data);

       session()->flash('success','service update success');

       return Redirect('dashboard/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $this->DeleteImg($service->icon,'services');
        $this->DeleteImg($service->image,'services');
        $service->delete();
        return response()->json([
            'status' => true,
            'message' => 'service deleted successfully'

        ]);

    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        service::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'message'=>"service deleted successfully."]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $services = service::where('name_ar','like','%'.$search.'%')
        ->orWhere('name_en','like','%'.$search.'%')
        ->orWhere('description_ar','like','%'.$search.'%')
        ->orWhere('description_en','like','%'.$search.'%')
        ->orWhere('titel_ar','like','%'.$search.'%')
        ->orWhere('titel_en','like','%'.$search.'%')
        ->paginate();
        return view('back.services.index',[ 'services' =>$services]);
    }


















public function test(){



for($i =0 ; $i <=10 ;$i=$i+1){

    echo "ok";
    echo "<br>";
   for($j=0 ; $j < 5 ; $j=$j+1){
    echo "kemo";
    echo "<br>";
   }
 

}



}





















}
