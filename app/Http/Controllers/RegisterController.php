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

'name'=>'required|min:5','username'=>'','email'

]);

}



}
