<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUsers extends Controller
{
    public function index(){
        $users =User::paginate();
        return view('back.users.index',['users' => $users]);
    
    }

    public function create(){
        return view('back.users.create');
    }

    public function store(Request $request){

        $request->validate([
            "name" => "required|string|min:2",
            "password" => "required|string|min:8|max:18",
            'email' => "required|string|min:2|email",

        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);

        session()->flash('success','service create success');
       return Redirect('dashboard/user');
        
    }

    public function show(User $user){
        return view('back.users.show',['user' => $user]);
    }

    public function edit(User $user){
        return view('back.users.edit',['user' => $user]);


    }

    public function update(Request $request , User $user){
        $request->validate([
            "name" => "required|string|min:2",
            "password" => "required|string|min:8|max:18",
            'email' => "required|string|min:2|email",

        ]);

        $user->update($request->all());

        session()->flash('success','service update success');
       return Redirect('dashboard/user');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'status' => true,
        ]);
    }

}
