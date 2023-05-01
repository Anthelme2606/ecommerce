@extends('layouts.app')
@section('content')

<div style="padding-left: 100px;" class="btn btn-info">
<form action="{{route('store_number')}}" method="POST">
    @csrf
    <input  type="text" name="phone" placeholder="** ** ** **" required><br>
    <input  type="submit" name="submit">
    </form>
</div>


@endsection