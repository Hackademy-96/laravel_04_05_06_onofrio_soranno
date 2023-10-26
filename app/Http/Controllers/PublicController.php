<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function contattaci(){
        return view('contattaci');
    }

    public function ringraziamenti(){
        return view('ringraziamenti');
    }

    public function prodotti(){
        return view('prodotti');
    }

    public function chiSiamo(){
        return view('chiSiamo');
    }

    public function contattaci_submit(Request $request){
        $email = $request->input('email');
        $name = $request->input('name');
        $message = $request->input('message');

       
        
        $user_data = compact('name', 'email', 'message');

        Mail::to($email)->send(new ContactMail($user_data));
        Mail::to('hack96@aulab.com')->send(new AdminMail($user_data));
        return redirect(route('ringraziamenti'));
      
    }
}
