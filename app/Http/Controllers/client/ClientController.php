<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //
    public function index()
    {
        return view('client.client');
    }
    public function store(Request $request)
    {

        $this->validate($request,['nom'=>'required|max:255',
        'email'=>'required|max:255|unique:clients|email',
        'password'=>'required|min:8',
    'phone'=>'required|regex:/^(\+228)[0-9]{8}$/',
    're_password'=>'required|same:password',]);

//return 'Bonjour '.$data['nom'];

    $client=new Client();
    $client->nom=$request->input('nom');
    $client->email=$request->input('email');
    $client->password=bcrypt($request->input('password'));
    $client->phone=$request->input('phone');
    $client->save();
    $remember=$request->has('remember');
    $credit=$request->only('email','password');
    if(Auth::attempt($credit,$remember))
    return redirect()->intended('dashboard');
   // return view("ajouer avec sucess");

   // return view('')
    return redirect()->route('home')->with('success','Les donnees enregistres avec succes!');
    //$client->nom=$request->input('nom');
       
    }
    public function login()
    {
        return view('client.connexion');
    }
    public function vers(Request $request)
    {
        $client =Client::all();
        foreach($client as $cli)
        {
            if($cli->email==$request->email)
            {
              //  echo $cli->password.'<br>'.bcrypt($request->password);
                
                if( password_verify( $request->password,$cli->password))
                {
                   // echo "merci";
                    
                    
                    return redirect(route('home')); 
                }
            }
        }
        
    }
    public function update(Request $request)
    {
        $this->validate($request,['nom'=>'required|max:255',
        'email'=>'email|required|unique:admins',
        'password'=>'required|min:8',
        're_password'=>'required|same:password',
        'phone'=>'required|regex:/^(\+228)[0-9]{8}$/']);  
        $client=Client::find($request->id);
    }
}
