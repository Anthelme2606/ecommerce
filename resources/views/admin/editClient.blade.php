@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le client</h1>
        <form action="{{ route('admin_edit_client',$client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Id:</label>
                <input type="text" class="form-control" name="id" id="id" value="{{$client->id }}" readonly="true" >
            </div>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="name" id="nom" value="{{ $client->nom }}" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" class="form-control" name="email" value="{{$client->email}}" >
           </div>
           <div class="form-group">
                
                <input type="submit" class="btn btn-primary" name="button">
            </div>
          @endsection