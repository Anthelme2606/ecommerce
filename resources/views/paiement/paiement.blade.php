@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paiement</title>
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.2"></script>
    
</head>
<body>
   
    
    <div id="embed" style="width:700px;height:300px"></div>
    
    <script type="text/javascript">
        
        FedaPay.init({
            public_key:'pk_sandbox_v4eu0k1YeZzTxC4NTD4r87o2',
            tansaction:
            {
            amount:'1000',
            description:'Acheter mon produit'
            },
    customer:{
        email:'joen@gmail.com',
        lastname:'Doe',
      // firstname:'Joe'
    },
    container:'#embed'});

    </script>    
    
</body>
</html>
@endsection