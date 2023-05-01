@extends('shop')

@section('content')





<main role="main">

    <section class="py-5">
        <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
     <div class="btn btn-secondary">
                <table class="table table-bordered table-responsive-sm">
                <thead>
                    <tr style="color: white;">
                        <th  >Produit</th>
                        <th>Qte</th>
                        <th>P.U(FCFA)</th>
                        <th>Total TTC(FCFA)</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($content as $cont)
                  
                <tr style="color: white;"> 
                  
                    <td>
                    
                       
                        <img width="110" class="rounded-circle img-thumbnail" src="{{asset('produitcollect/'.$cont->options['photo'])}}" alt="{{$cont->options['photo']}}">
                        <p>{{$cont->name}}</p>
                        <p style="color:black;">Taille: &nbsp<strong>{{$cont->options['size']}}</strong></p>
                        
                    </td>
                    
                    
                    
                    <td>

                                <input style="display: inline-block" id="qte" class="form-control col-sm-4" type="number" value="{{$cont->qty}}">


                                <a  class="pl-2" href=""><i class="fas fa-sync"></i> </a>
                    </td>
                    <td>
                        {{number_format($cont->price,2)}}
                    </td>
                    <td>
                        {{number_format($cont->price*$cont->qty,2)}}
                    </td>
                    
                    <td>
                     
                 <form action="{{route('supprimer',['id'=>$cont->rowId])}}" id="sup_pro" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        
               
                        <a   id ="sup_pro" class="btn btn-danger" href=" {{route('supprimer',['id'=>$cont->rowId])}} ">Supprimer du panier</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td>Total HT(FCFA)</td>
                    <td>{{$total}} </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                </tr>
                </tfoot>
            </table>
            </div>
            <a class="btn btn-block btn-outline-dark" href="{{route('myForm',['id'=>Auth::user()->id])}}">Commander</a>
        </div>
    </section>
</main>
@endsection