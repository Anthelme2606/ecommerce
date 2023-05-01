<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $produit=Produit::with('Category')->get();
        //dd($produit);
      //  $cate=Category::where('ligne',1)->get();
        return view('shop\index',compact('produit'));
    }
    public function produit(Request $req)
    {
       
       $produit=Produit::find($req->id);
       //$cate=Category::where('ligne',1)->get();
       return view('shop\produit',compact('produit'));
    }
    public function categorieVue(Request $request)
    {
       // $cate=Category::where('ligne',1)->get();
      // $produit=Produit::where('cate_id',$request->id)->get();
      // $produit=Produit::all();
      
      $categorie=Category::find($request->id);
      $produit=$categorie->produits();
     /// dd($categorie->produit);
      
        return view('shop.categorie',compact('produit','categorie'));
    }
    public function tagvue(Request $request)
    {
        $tag=Tag::find($request->id);
        $categorie=Category::find($request->id);
        $produit=$tag->produit;
        return view('shop.categorie',compact('produit','tag'));
    }
    
}
