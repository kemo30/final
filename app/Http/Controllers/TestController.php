<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index(Request $request){
        return $request;

       session()->flash('success','this category is delete from data-base');
      
        return redirect('/dashboard');
    }

    public function test (){
        $user = Auth::user();
        return $user->profile->frist_name;
    }
}
