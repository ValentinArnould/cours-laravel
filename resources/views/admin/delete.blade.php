@extends('layouts.page')
@section('content')
<form action="/admin/voyages/delete/{{$voyage->id}}" method="post">
@csrf
@method('delete')
    <input type="radio" name="suppress" id="" value="oui">
    <input type="radio" name="suppress" id="" value="non">
    <input type="submit" value="Delete"> <a href="/admin"></a>
</form>
@endsection