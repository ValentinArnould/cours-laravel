@extends('layouts.page')
@section('content')

<ul>
@foreach ($voyages as $voyage)

<li>{{$voyage->libelle}}</li>

@endforeach
</ul>

@endsection

