@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

    <!-- Styles personnalisés -->
    <link rel="stylesheet" href="{{ asset('css/pd.css') }}" >

    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3vxm"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
      </head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mon site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <form id="addProductForm" method="POST" action="{{route('produitStore')}}" enctype="multipart/form-data">
    @csrf   
    <input type="hidden" name="cate_id" value="{{$cate->id}}">
  <div class="form-group">
    <label for="productName">Nom du produit :</label>
    <input type="text" class="form-control" id="productName" name="productName" required>
  </div>
  <div class="form-group">
    <label for="productDescription">Description :</label>
    <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
  </div>
  <div class="form-group">
    <label for="productPrice">Prix :</label>
    <input type="number" class="form-control" id="productPrice" name="productPrice" required>
  </div>
  <div class="form-group">
    <label for="productImage">Photo :</label>
    <input type="file" class="form-control-file" id="productImage" name="productImage"  required>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
    

    <!-- Contenu principal -->
    <script src=""></script>

    <!-- Pied de page 
    <footer class="bg-light py-3">
        <div class="container text-center">
            <p>Mon site &copy; {{ date('Y') }}</p>
        </div>
    </footer>-->
    
</body>
</html>
@endsection
