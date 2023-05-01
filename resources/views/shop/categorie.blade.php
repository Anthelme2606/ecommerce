@extends('shop');
@section('content');
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if(isset($categorie))
            @if($categorie->parent_id!=null)
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('categorie',['id'=>$categorie->parent->id])}}">{{$categorie->parent->nom}}</a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page">{{$categorie->nom}}</li>
            @foreach($categorie->children as $cate)
            
            
            <li class="breadcrumb-item"><a href="{{route('categorie',['id'=>$cate->id])}}">{{$cate->nom}}</a></li>
            @endforeach
            @else
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('categorieTag',['id'=>$tag->id])}}">{{$tag->nom}}</a></li>
           
            @endif
            </ol>
    </nav>
    <main role="main">


    <div class="py-3">
    
        <div class="container-fluid">
            
            <div class="row">
              @foreach($produit as $prod)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produitcollect/'.$prod->photo)}}" class="card-img-top img-fluid" alt="{{$prod->nom}}">
                            <div class="card-body">
                                <p class="card-text"><p>{{$prod->nom}}</p> <br><strong>{{$prod->description}}</strong></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price" ><h4 style="color:green">{{$prod->prix}} FCFA</h4></span>
                                    <a href="{{route('produit',['id'=>$prod->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            
                        </div>
                   </div>
               @endforeach
            
                    
        </div>
                



            </div>
            

            
            </div>
        

</main>


@endsection