<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/backend.css" rel="stylesheet">
</head>
<body>
    <h1>Remplir le formulaire de commande!!</h1>
    <div class="form-group">
    <form action="{{route('store_Commande',['id'=>Auth::user()->id])}}" id="myForm" method="POST">
        @csrf
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" class="form-control bg-success" value="{{$user_id->id}}" readonly><br>
        
        <label for="date">Date:</label>
        <input type="text" name="date" id="date" class="form-control bg-success" value="{{$now->toDateTimeString()}}" readonly><br>
        
        <label for="nom_prenom">Nom</label>
        <input type="text" name="nom_prenom" id="nom_prenom" class="form-control bg-success" value="{{$user_id->name}}" readonly><br>
        
        <label for="adresse">Adresse:</label>
        <input type="address" required name="adresse" id="adresse" class="form-control"><br>
         
        <label for="adresse">Phone:</label>
        <input type="address" required name="phone" id="phone" class="form-control bg-success" value="{{$user_id->phone}}" readonly ><br>
        
        <label for="adresse">Email:</label>
        <input type="address" required name="email" id="email" class="form-control bg-success" value="{{$user_id->email}}" readonly><br>

        <label for="total">Total A Payer:</label>
        <input type="text" name="totale" id="totale" class="form-control bg-success" value="{{$cartotal}}" readonly><br>
        <input type="submit" value="Envoyer" class="btn btn-primary ">
        
    </form>
    </div>
    <script>
            function submitForm()
            {
                event.preventDefault();
                var id=document.getElementById("id").value;
                var date =document.getElementById('date').value;
                var adresse=document.getElementById('adresse').value;
                var nom_prenom=document.getElementById('nom_prenom').value;
                var total=document.getElementById('total').value;
                alert("id : "+id + "\n date : "+date +"\n nom&prenom : "+nom_prenom +"\n adresse : "+adresse+"\n total : "+total) ;
                document.getElementById('myForm').reset();
            }
        </script>
 <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/holder.min.js"></script>

   
</body>
</html>