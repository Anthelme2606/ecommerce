@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <table border="40">
            <tr>
                <th>IdCommande</th>
                <th>Totatale A Payer</th>
                <th> Adresse</th>
                <th>Phone</th>
                <th>Email</th>
                
                <th>Definir Etat</th>
                
            </tr>
            @foreach($commandes as $commande)
            <tr>
                <td class="btn btn-success">{{$commande->id}}</td>
                <td>{{$commande->totale}}</td>
                <td>{{$commande->adresse}}</td>
                <td>{{$commande->phone}}</td>
                <td>{{$commande->email}}</td>
                <td>
                  <a href="{{route('showetat',[$commande->id])}}">Definir l'etat de la commande</a>
                </td>
                
            </tr>
            @endforeach
        </table>
    </div>
</div>


@endsection('content')

