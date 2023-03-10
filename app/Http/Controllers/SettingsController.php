<?php

namespace App\Http\Controllers;

use App\Models\contact_us;
use App\Models\gallary;
use App\Models\management;
use App\Models\social;
use App\Models\working;
use Illuminate\Http\Request;
use \App\Traits\uplode_files;

class SettingsController extends Controller
{
    use uplode_files;
/////////////////////////////////start management////////////////////////////////////////
    public function Management()
    {
       $management= management::all();
       if($management){
        $data=$management;
       }else{
        $data=null;
       }
        return view('back.settings.management',compact('data'));
    }

    public function ManagementStore(Request $request){
    $request->validate([
    'name_ar'=>'required',
    'name_en'=>'required',
    'discription_ar'=>'required',
    'discription_en'=>'required',
    'image'=>'required',]);

    $image=$this->SaveImg($request->image,'gallary/');
    $data=$request->all();
    $data['image']=$image;
    management::create($data);

    session()->flash('success','management create success');

    return Redirect('dashboard/settings/management');
    }
/////////////////////////////////end management////////////////////////////////////////
////////////////////////////////stat gallary///////////////////////////////////////////

    public function gallary()
    {
       $gallary= gallary::paginate();
        return view('back.settings.gallary',compact('data'));
    }



    public function gallaryStore(Request $request){
    $request->validate([
        'image'=>'required|image',]);
        $image=$this->SaveImg($request->image,'gallary/');
        gallary::create(['image'=>$image]);
        session()->flash('success','image create success');
        return Redirect('dashboard/settings/gallary');
    }

    public function gallaryDelete($id){
        $gallary=gallary::find($id);
        $this->DeleteImg($gallary->image,'gallary/');
        $gallary->delete();
        session()->flash('success','image delete success');
        return Redirect('dashboard/settings/gallary');
    }

    ////////////////////////end gallary///////////////////////////


    /////////////////////// start social media/////////////////////

    public function socialmedia()
    {
        $social=social::all();
        return view('back.settings.socialmedia',compact('social'));
    }


    public function socialmediaupdate(Request $request,social $social){
     
        $social->update($request->all());
        session()->flash('success','social media update success');
        return Redirect('dashboard/settings/socialmedia');
    }
    /////////////////////// end social media/////////////////////


    ////////////////////// start contact us ///////////////////////
    public function contactus(){
    $contacts=contact_us::all();
    return view('back.settings.contactus',compact('contacts'));
    }
    public function contactusupdate(Request $request,contact_us $contact_us){
        $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
        ]);
        $contact_us->update($request->all());
        session()->flash('success','contact us update success');
        return Redirect('dashboard/settings/contactus');
    }
    ////////////////////// end contact us ///////////////////////

    ////////////////////// start work time /////////////////////////

    public function working(){
        $data =working::all();
        return view('back.settings.working',['date'=>$data]);
    }
  public function workingupdate(Request $request,working $working){
    $request->validate([
        'sat'=>'required',
        'sun'=>'required',
        'mon'=>'required',
        'tue'=>'required',
        'wed'=>'required',
        'thu'=>'required',
        'fri'=>'required',
    ]);
    
    $working->update($request->all());
    return Redirect('dashboard/settings/working');

  }


    ////////////////////// end work time /////////////////////////

    

}


   





















