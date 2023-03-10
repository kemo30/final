<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use App\Traits\uplode_files;
use Nette\Utils\Json;

class JobController extends Controller
{
    use uplode_files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jops=job::paginate();
        return view('back.jops.index',[
            'jop' => $jops,
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   //
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        return view('back.jop.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
       
        $this->DeleteImg($job->file,'jops');
        $job->delete();
        return response()->json([
            'status' => true,
           
        ]);
    }
}
