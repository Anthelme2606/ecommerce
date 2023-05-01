@extends('welcome');
@section('content');
<div class="album py-5 bg-light">
    <div class="container">
    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($produit as $prod)
        <div class="col">
          <div class="card shadow-sm">
            
            <svg class="bd-placeholder-img card-img-top" xmlns=" " width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                <img src="{{asset('produitcollect/'.$prod->photo)}}" alt="image" width="" height="">
            </text></svg>

            <div class="card-body">
              <p class="card-text">{{$prod->nom}}</p>
              <strong>{{$prod->description}}</strong>
              <h3 style="color:blue;">{{$prod->category->nom}}</h3>
              <h4 style="color: green;">{{$prod->prix}} FCFA</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('produit',[$prod->id])}}">Voir</a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>

          </div>
        </div>
        @endforeach
         </div>
         
        </div>
      </div>
      
    
  @endsection

