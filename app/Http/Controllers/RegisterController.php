<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.registrar');
}


public function store(Request $request){
   

$this->validate($request,[

'name'=>'required|max:30','username'=>'',
'email'=>'required|unique:users|email|max:60',
'username'=>'required|unique:users|min:3|max:20',
'password'=>'required'
]);

}



}
