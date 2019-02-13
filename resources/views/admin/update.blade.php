@extends('layouts.page')
@section('content')

@if($errors->has('libelle'))
  {{ $errors->first('libelle')}}
@endif


<form action="/admin/voyages/update/{{$voyage->id}}" method="post">
@method('PUT')
@csrf
    <input name="libelle" type="text" value="{{$voyage->libelle}}">

    <input type="submit" value="valider">

</form>

@endsection