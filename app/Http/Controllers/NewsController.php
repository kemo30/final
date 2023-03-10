<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use App\Traits\uplode_files;

class NewsController extends Controller
{
    use uplode_files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=news::paginate();
        return view('back.news.index',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
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
        'name_ar'=>'required',
        'name_en'=>'required',
        'titel_ar'=>'required',
        'titel_en'=>'required',
        'date'=>'required',
        'image'=>'required|image',
        ]);


        $image=$this->SaveImg($request->image,'news/');
        $data=$request->all();
        $data['image']=$image;
        news::create($data); 
        session()->flash('success','news create success');
        return Redirect('dashboard/news');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        return view('back.news.show',['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        return view('back.news.edit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        $request->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'titel_ar'=>'required',
            'titel_en'=>'required',
            'date'=>'required',
            'image'=>'image',
            ]);
    
        
       if($request->image){
        $image=$this->SaveImg($request->image,'news');
        $this->DeleteImg($news->image,'news');
       }else{
        $image=$news->image;
       }

       $data = $request->all();
       $data['image']=$image;
       
       $news->update($data);

       session()->flash('success','news update success');

       return Redirect('dashboard/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        $this->DeleteImg($news->image,'news');
        $news->delete();
        return response()->json([
            'status' => true,
        ]);
    }
}
