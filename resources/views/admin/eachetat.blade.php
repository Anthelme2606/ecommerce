@extends('layouts.app')
@section('content')

<div >
    <form action="{{route('storetat')}}" class="form-group" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$commande_id->id}}">
        <select name="etat" id="" class="btn btn-warning">
                        <option class="btn btn-primary" value="attente">Attente</option>
                        <option  class="btn btn-success" value="valide">Valide</option>
                        <option class="btn btn-danger" value="annuler">Annuler</option>
                    
        </select>
        <input type="submit" value="valider">
    </form>
</div>
@endsection