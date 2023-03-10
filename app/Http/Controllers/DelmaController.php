<?php

namespace App\Http\Controllers;

use App\Models\delma;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Traits\uplode_files;

class DelmaController extends Controller
{
    use uplode_files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delmas= delma::paginate();

        return view('back.delma.index',['delma'=>$delmas]);
    }


    public function create()
    {

        return view('back.delma.create');
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
            'name_ar'=>'required|max:255|min:2|String',
            'name_en'=>'required|max:255|min:2|String',
            'titel_ar'=>'required',
            'titel_en'=>'required',
            'image' => 'required|image',
           
        ]);
        $data = $request->all();
        $data['image'] = $this->SaveImg($request->image, 'delma/');
        delma::create($data);
        return redirect()->route('delma.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\delma  $delma
     * @return \Illuminate\Http\Response
     */
    public function show(delma $delma)
    {
        return view('back.delma.show', compact('delma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\delma  $delma
     * @return \Illuminate\Http\Response
     */
    public function edit(delma $delma)
    {
        return view('back.delma.edit', compact('delma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\delma  $delma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delma $delma)
    {
        $request->validate([
            'name_ar'=>'required|max:255|min:2|String',
            'name_en'=>'required|max:255|min:2|String',
            'titel_ar'=>'required',
            'titel_en'=>'required',
            'image' => 'image',
           
        ]);

        if($request->image){
            $image=$this->SaveImg($request->image,'doctors');
            $this->DeleteImg($delma->image,'doctors');
        }else{
            $image=$delma->image;
        }
           $data = $request->all();
           $data['image']=$image;
        $delma->update($data);
        return redirect()->route('delma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\delma  $delma
     * @return \Illuminate\Http\Response
     */
    public function destroy(delma $delma)
    {
        $delma->delete();
        $this->DeleteImg($delma->image, 'delma/');
        return redirect()->route('delma.index');
    }
}
