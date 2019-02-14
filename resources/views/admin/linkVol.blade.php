@extends('layouts.page')

@section('content')

<form action="/admin/voyage/vol" method="post">
@csrf
@method('put')

</form>

@endsection