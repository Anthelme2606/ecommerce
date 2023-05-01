@extends('shop')
@section('content')
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
          @if($produit->category->parent!=null)
           
          <li class="breadcrumb-item"><a href="{{route('categorie',['id'=>$produit->category->parent->id])}}">{{$produit->category->parent->nom}}</a></li>
            @endif
          <li class="breadcrumb-item active" aria-current="page">

                <a href="{{route('categorie',['id'=>$produit->category->id])}}">
                {{ $produit->category->nom}}</a>
                </li>
        </ol>
    </nav>
<main role="main">


        <div class="container">


            <div class="row justify-content-between">

                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('produitcollect/'.$produit->photo)}}" alt="Card image cap">
                        <p>{{$produit->nom}}</p> 
                        <strong>{{$produit->description}}</strong>
                    </div>
                </div>
                <div class="col-6">

                    <h1 class="jumbotron-heading">Articles</h1>
                    <h5>{{$produit->prix}}FCFA</h5>
                    <p class="lead text-muted">Egalement qualifiée de commerce,la vente en ligne correspond aux differentes transactions qui s'effectuent au travers de reseaux informatique!.</p>
                    <hr>
                    
                    @foreach($produit->tags as $tag)
                    <a class="nav-link" href="{{route('categorieTag',['id'=>$tag->id])}}"><strong style="color:greenyellow ;">{{$tag->nom}}</strong></a>
                    @endforeach
                    <form action="{{route('panier',['id'=>$produit->id])}}" method="POST" id="panier_add">
                        @csrf
                    <label for="size">Choisissez votre taille</label>
                    <select name="size" id="size" class="form-control">
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                    <label for="qty">Quantite:</label>
                    <input type="number" value="1" name="qty" id="qty">
                    </form>
                    
                    <p>
                        <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</button>
                
                    </p>

                </div>
            </div>
        </div>

   @if ( count($produit->recommandation) >0)
    <div class="album py-5 bg-light">
        <div class="container-fluid">
            <div class="row">
            <h3>Vous aimeriez aussi</h3> 
                  
            
            <div class="row justify-content-between">
                 @foreach($produit->recommandation as $produit_recommande)

                    @if($produit_recommande !=null)   
                    @endif
                   <div class="col-6">
                       <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('produitcollect/'.$produit_recommande->photo)}}" alt="Card image cap">
                        <p>{{$produit_recommande->nom}}</p> 
                        <strong>{{$produit_recommande->description}}</strong>
                    </div>

                
                 <div class="card-body">
                     
                                <div class="d-flex justify-content-between align-items-center">
                                   

                                    <a href="{{route('produit',['id'=>$produit_recommande->id])}}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                 </div>
                            
                
                </div>
                @endforeach

         </div>

                </div>

                
            </div>
            @endif
            
        

</main>


@endsection