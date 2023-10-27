<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ArticleRequest;

class PublicController extends Controller
{
    public function welcome(){
        $articles = Article::all();
        return view('welcome', compact('articles'));
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
    public function article(ArticleRequest $request){
            $article = Article::create([
                'name' => $request->name,
                'price' => $request->price,
                'seller' => $request->seller,
                'img'=>$request->file('img')->store('public/articles/img'),  
        ]);
       

        return redirect(route('welcome'))->with('message', "Hai caricato correttamente l'articolo");
    }
        public function articoloDettaglio(){
            return view('articoloDettaglio');
        }
}
