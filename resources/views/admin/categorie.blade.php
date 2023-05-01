@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>Ajouter une catégorie d'articles</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
 <div class="container">
  <h1>Ajouter une catégorie d'articles</h1>
  <form method="post" action ="{{route('categoriead')}}">
    @csrf
   <div class="form-group">
    <label for="category-name">Nom de la catégorie</label>
    <input type="text" class="form-control" id="category-name" name="nom">
   </div>
   <div class="form-group">
    <label for="category-ligne">Mettre en ligne</label>
    <input type="checkbox" class="" id="ligne" name="ligne" value="0" >
</div>

<div class="form-group">
    <label for="parent-id">categorie parent</label>
    <select name="parent_id">
        @foreach($cates as $cate)
        <option value="{{$cate->id}}">{{$cate->id}}</option>
        @endforeach
</select>
</div>
   
   <button type="submit" onclick="func()" class="btn btn-info" name="xend">Ajouter</button>
  </form>
  <p id="p1" style="color:red;"></p>
 </div>
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="{{asset('js/script.js')}}"></script>
 <script>
    function func()
    {
        var g=document.getElementById('ligne');
        var inp=document.getElementById('category-name');
        
        
         
          if(g.checked)
          {
            g.value=1;

          }
          else{
            document.getElementById('p1').innerHTML="Mettre la categorie toujours en ligne!!";
          }
          
       // document.getElementById('p1').innerHTML;
    }
 </script>
</body>
</html>
@endsection