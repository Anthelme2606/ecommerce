<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Etat;


class AdminController extends Controller
{
    //*
    public function create()
    {
        
        return view('admin.create');
    }
    public function show(Request $request)
    {
        $admin=Admin::find($request->id);
        $clients=Client::all();
        return view('admin.show',compact('admin','clients'));
    }
    public function addAdmin(Request $request )
    {
        $this->validate($request,['nom'=>'required',
        'email'=>'required|email|unique:admins',
        'password'=>'required|min:8',
        're_password'=>'required|same:password']);
        $admin=new Admin();
        $admin->nom=$request->input('nom');
        $admin->email=$request->input('email');
        $admin->password=bcrypt($request->input('password'));
        $admin->save();
        return redirect(route('home'));
    }
    public function update(Request $request)
    {
        
        $this->validate($request,['nom'=>'required',
        'email'=>'required|email|unique:admins',
        'password'=>'required|min:8',
        're_password'=>'required|same:password']);
        $admin=Admin::find($request->id);
        $admin->nom=$request->input('nom');
        $admin->email=$request->input('email');
        $admin->password=bcrypt($request->input('password'));
        $admin->save();
        
    }
    public function destroy($id)
    {
        $client=Client::find($id);
        $client->delete();
        return redirect()->route('showclients');
    }
    public function categorie()
    {
        $cates=Category::all();
        return view('admin.categorie',compact('cates'));
    }
    public function produit()
    {
        
        return view('admin.produit');
    }
    public function store(Request $request)
    {
        $this->validate($request,['nom'=>'required|unique:categories',
    'ligne'=>'required',]);
        $cate =new Category();
        $cate->nom=$request->input('nom');
        $cate->ligne=$request->input('ligne');
        $cate->parent_id=$request->input('parent_id');
        $cate->save();
        return redirect()->route('homee');
    }
    public function showClients()
    {
        $clients=Client::all();//where('role',0)->get();
        return view('admin.Allclient',compact('clients'));
    }
    public function up_date(Request $request,$id)
    {
        //echo "message";
       /*$request->validate(['name'=>'required',
        'email'=>'required|unique:clients|email',
        ]);*/
        $client=Client::find($id);
        $client->nom=$request->input('name');
        $client->email=$request->input('email');
        $client->update();
        
       // $client->save();
        
        return redirect()->route('showclients')->with("success","Data update successfully");
        
        
    }
    public function showeditpage(Request $request)
    {
        $client=Client::find($request->id);
        return view('admin.editClient',compact('client'));

    }
    public function admindelete($id)
    {
        $client=Client::find($id);
        if($client->role=='0')
        {
            $client->delete();
        }
        else{
            $clients=Client::all();
            $message="Action impossible!!";
           return view('admin.Allclient',compact('message','clients'));
        }
        
        return redirect()->route('showclients');
    }
    public function showPr()
    {
        $produitAll=Produit::all();
        return view('admin.Allproduit',compact('produitAll'));
    }
    public function destroyPr($id)
    {

        $pro=Produit::find($id);
        $pro->delete();
        $produitAll=Produit::all();
        return view('admin.Allproduit',compact('produitAll'));
    }
    public function categorieAll()
    {
        $cateAll=Category::where('ligne',1)->get();
        return view('admin.categorieall',compact('cateAll'));
    }
    public function produitvers(Request $request)
    {
        $cate=Category::find($request->id);
        return view('admin.produit',compact('cate'));
    }
    public function storeP(Request $request)
    {
        
       /* $this->validate($request,['cate_id'=>'required',
        'productName'=>'required',
        'productPrice'=>'required',
        'productImage'=>'required|image|mimes:jpeg,jpg,png,gif,svg',
        'productDescription'=>'required',]);*/
        
        $produit=new Produit();
        $produit->cate_id=$request->input('cate_id');
        $produit->nom=$request->input('productName');
        $produit->prix=$request->input('productPrice');
        $produit->description=$request->input('productDescription');
        if($request->hasFile('productImage'));

        {
         
        $image=$request->file('productImage');
        
        $savelike=time().".".$image->getClientOriginalExtension();
        $image->move(public_path('produitcollect'),$savelike);
        $produit->photo=$savelike;
        }
        
        
        $produit->save();
        
        return redirect(route('showPr'));

    }
    public function allcommande()
    {
        $commandes=Commande::all();
        
        
        return view('admin.allCommande',compact('commandes'));

    }
    public function showetat(Request $request)
    {
        $commande_id=Commande::find($request->id);

        return view('admin.eachetat', compact('commande_id'));
    }
    public function storetat(Request $re)
    {
        $etat=new Etat();
        $etat->nom=$re->input('etat');
        $etat->cmd_id=$re->input('id');
        $etat->save();
    return redirect()->route('allcommande');
    }
    public function voiretat(Request $request)
    {
    $etat=Etat::where('cmd_id',$request->cmd_id)->get(['nom']);
    dd($etat);
    return view('admin.voiretat',compact('etat'));

    }
    
}
