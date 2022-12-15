<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $product_to_check = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('product_to_check'));

    }

    public function acceptProduct(Product $product){
        $product->setAccepted(true);
        return redirect()->back()->with('message','Annuncio promosso');

        

    }

    public function rejectProduct(Product $product){
        
        $product->setAccepted(false);
        return redirect()->back()->with('message','Annuncio non promosso');

    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','Complimenti, la richiesta è andata a buon fine');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message', 'L\'utente è diventato revisore');

    }

    public function reviseSingleProduct(Product $product){

        return view('revisor.index', ['product_to_check'=>$product]);


    }
}
