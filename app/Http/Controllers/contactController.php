<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view('contacts');
    }
    public function send(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        return view('contact_out',[
            'message' => $message,
            'email'=>$email,
            'name'=>$name
        ]);
    }

}
