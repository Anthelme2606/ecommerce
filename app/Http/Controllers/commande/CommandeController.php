<?php

namespace App\Http\Controllers\commande;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
//use Hardevine\Cart\Facades\Cart;
//use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;


class CommandeController extends Controller
{
    //
    public function index()
    {
        return view('commande.commande');
    }
    public function form(Request $req)
    {
        $user_id=User::find($req->id);
        $cartotal=Cart::subtotal();
        $date= new DateTime();
        $now = Carbon::now();
        return view('commande.form',compact('cartotal','date','now','user_id'));
    }
    public function store(Request $req)
    {
        $commande =new Commande();
        $commande->user_id=$req->input('id');
        $commande->email=$req->input('email');
        $commande->phone=$req->input('phone');
        $commande->adresse=$req->input('adresse');
        $commande->nom_prenom=$req->input('nom_prenom');
        $commande->date=$req->input('date');
        $commande->totale=$req->input('totale');
        $commande->save();
        return redirect()->route('etatcommande');



    }
    public function etat()
    {
        return view('commande.etat');
    }
}
