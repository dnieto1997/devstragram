<?php

namespace App\Http\Controllers;

use Stringable;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.registrar');
}


public function store(Request $request){
   


$request->request->add(['username'=> Str::slug($request->username)]);


$this->validate($request,[

'name'=>'required|max:30','username'=>'',
'email'=>'required|unique:users|email|max:60',
'username'=>'required|unique:users|min:3|max:20',
'password'=>'required|confirmed|min:6'
]);

User::create([

    'name'=> $request->name,
    'username'=> $request->username ,
    'email'=> $request->email,
    'password'=> Hash::make($request->password)



]);

auth()-> attempt([
'email'=> $request-> email,
'password'=> $request-> password

]);




return redirect()-> route('posts.index');

}



}
