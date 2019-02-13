@extends('layouts.page')
@section('content')

@auth
    yolo
@else
    doom
@endauth

<a href="/admin/voyages/add">create</a>
<table>
<thead>
    <th> 
        Voyage
    </th>
</thead>

<tbody>
@foreach ($voyages as $voyage)
    <tr>
        <td> 
            {{$voyage->libelle}}
        </td>
        <td>
            <a href="/admin/voyages/edit/{{$voyage->id}}">edit</a> <br>
            <a href="/admin/voyages/delete/{{$voyage->id}}">delete</a>
        </td>
    </tr>
@endforeach
</tbody>
</table>
@endsection