@extends('layouts.page')
@section('content')

@if($errors->has('libelle'))
  {{ $errors->first('libelle')}}
@endif

<form action="/admin/voyages/add" method="post">
@csrf
    <input name="libelle" type="text">

    <input type="submit" value="valider">

</form>
@endsection
