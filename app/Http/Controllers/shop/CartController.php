<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Produit;
use App\Models\User;
//use Hardevine\Cart\Facades\Cart;
//use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
    public function add(Request $request)
    {
        
       $produit=Produit::find($request->id);
       
        Cart::add(array(
            'id'=>$produit->id,
            'name'=>$produit->nom,
            "qty"=>$request->qty,
            'price'=>$produit->prix,
            'options'=>array('size'=>$request->size,'photo'=>$produit->photo)
           // $id, $name, $qty, $price, array $options, $taxrate
        ));
        
        return redirect(route('index_carte'));
    }
    public function text(Request $request)
        {

            //$contenu=Cart::subtotal();
           // dd($contenu);
           $user=User::find($request->id);
           dd($user);
        }
    
    public function supprimer($id)
    {
        
      //  $produit=Produit::find($request->id)
      $rowId='da39a3ee5e6b4b0d3255bfef95601890afd80709';
        Cart::remove($id);
        //$produit=Produit::find($request->id)
        //Cart::remove($produit);
        return redirect(route('index_carte'))->with('success','produit supprimer du panier');
    }
    
    
    public function indexC()
    {
       // dd(Cart::content());
       $content=Cart::content();
       $total=Cart::subtotal();
       
        return view('cart.panier',compact('content','total'));
    }
}
