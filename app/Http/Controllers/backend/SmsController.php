<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
//use Laravel\Vonage\Fa
use Vonage\Laravel\Facade\Vonage;

class SmsController extends Controller
{
    //


    public function create()
    {
        return view('back.create');
    }
    public function store(Request $request)
    {
        $code=rand(1111,9999);
        $phone=new Contact();
        $phone->number=$request->input('phone');
        $phone->code=$code;
      //  $num=$phone->number
       // dd($code);
        $phone->save();
       /* $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+228'.(int)$request->number,
            'from'=>'SVAD',
            'text'=>'verifier votre commande:'.$code,
        ]);*/
        $fromN='9645';
        $vonage=app('Vonage\Client');
        //$text=new \Vonage\SMS\Message\SMS($request->phone,$fromN,'Text using Laravel');
        return redirect()->route('number');
    }
}
