<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\uplode_files;


class AboutController extends Controller
{
    use uplode_files;
    public function index()
    {
        $about=about::paginate();
        return view('back.about.index',['about'=>$about]);
    }

    public function create()
    {
        return view('back.about.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|min:2',
            'name_en' => 'required|string|min:2',
            'titel_ar' => 'required|string',
            'titel_en' => 'required|string',
            'image' => 'required|image',
       ]);
       
      
       $image=$this->SaveImg($request->image,'about/');
       $data =$request->all();
       $data['image']=$image;
       about::create($data); 

       session()->flash('success','about create success');
       return Redirect('dashboard/about');
    }

   
    public function show(about $about)
    {
        return view('back.about.show',['about'=>$about]);
    }

    
    public function edit(about $about)
    {
        return view('back.about.edit',['about'=>$about]);
    }

   
    public function update(Request $request, about $about)
    {
        $request->validate([
            'name_ar' => 'required|string|min:2',
            'name_en' => 'required|string|min:2',
            'titel_ar' => 'required|string',
            'titel_en' => 'required|string',
            'image' => 'image',
       ]);
       
       if($request->image){
        $image=$this->SaveImg($request->image,'about');
        $this->DeleteImg($about->image,'about');
       }else{
        $image=$about->image;
       }
       $data = $request->all();
       $data['image']=$image;

       $about->update($data);

       session()->flash('success','service update success');

       return Redirect('dashboard/about');
      
    }
    public function destroy(about $about)
    {
        $this->DeleteImg($about->image,'about');
        $about->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
