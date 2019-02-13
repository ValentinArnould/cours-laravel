@extends('layouts.page')
@section('content')
<thead>
    <th> Voyage
    </th>
</thead>

<tbody>
    <tr>
        <td> {{$voyage->libelle}}
        </td>
    </tr>
</tbody>
@endsection