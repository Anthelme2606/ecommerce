

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des clients</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Phone</th>
                    
                    <th>Action</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @isset($message)
                <p class="btn btn-danger">{{$message}}</p>
                @endisset
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        
                        <td>
                            
                            <a href="{{ route('editpageclient',$client->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('admin_delete_client', $client->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                             
                                <button type="submit" class="btn btn-danger" >Supprimer</button>
                            </form>
                            
                        </td>
                        <td>
                            @if($client->role=='0')
                            <div class="btn btn-info">Client</div>
                            @elseif($client->role=='1')
                            <div class="btn btn-secondary">Admin</div>
                              
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('client')}}" class="btn btn-success">Ajouter un client</a>
    </div>
@endsection