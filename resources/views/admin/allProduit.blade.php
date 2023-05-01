@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tout Produit </title>
    
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-light bg-light">
<div class=" btn btn-dark ">
  <a class="navbar-brand" href="#"><img src="{{asset('produitcollect/hulk.jpg')}}" alt="logo" class="rounded-circle" width="150" height="150"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>



  
 <div class="container">
    <div class="row">
    
        @foreach($produitAll as $produit)
        
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <img src="{{asset('produitcollect/'.$produit->photo)}}" alt="produit_image" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">
                   <p class="btn btn-success"> {{$produit->nom}}
                   </p>   
                </h5>
                    <p class="card-text">
                       {{$produit->description}} 
                       
                    </p>
                    <p class="card-text">
                        {{$produit->prix}}FCFA
                       
                    </p>
                    <div class="card-text">
                        <form action="{{route('destroyPr',['id'=>$produit->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        
        @endforeach
        
    </div>
    

 </div>
  
  
    
</body>
</html>
@endsection