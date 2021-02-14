<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index ()
    {
        $data = [
            'user' => User::all()
        ];
        return view('user.index',$data);

    }
    public function create ()
    {
        return view('user.create');
    }

    public function store ()
    {
        $user = new User();
        $user->name =  "Parinthorn Mukdapirom";
        $user->username = "admin";
        $user->email = "61123831@g.cmru.ac.th";
        $user->password = Hash::make("1234");
        $user->save();
        return redirect('/user');
    }
    public function edit ($id)
    {
       $user = User::find($id);
       $data = [
           'user' => $user
       ];

       return view('user.edit',$data);
    }
    public function update (Request $request,$id)
    {

        $name = $request->input('name');
        $user = User::find($id);
        $user->name = $name;
        $user->save();
        return redirect('/user');
    }
    public function delete ($id)
    {
     $category = User::find($id);
     $category->delete();

    return redirect('/user');
    }
}
