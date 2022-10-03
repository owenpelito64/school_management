<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
        // $allData = User::all();
        $data['allData'] = User::all();
        return view('backend.users.view_users',$data);
    }

    public function AddUser(){
        return view('backend.users.add_users');
    }

    public function StoreUser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name'  => 'required',
        ]);

        $data = new User();
        $data->usertype  = $request->usertype;
        $data->name  = $request->name;
        $data->email  = $request->email;
        $data->password  = bcrypt($request->password);
        $data->save();
        return redirect()->route('user.view');
    }
}
