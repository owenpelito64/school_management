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

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.view')->with($notification);
    }

    public function EditUser($id){
        $editData = User::find($id);
        return view('backend.users.edit_users',compact('editData'));
    }

    public function UpdateUser(Request $request, $id){
        $data = User::find($id);
        $data->usertype  = $request->usertype;
        $data->name  = $request->name;
        $data->email  = $request->email;
        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('user.view')->with($notification);;
    }

    public function DeleteUser(){
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'danger'
        );
        return redirect()->route('user.view')->with($notification);
    }
}
