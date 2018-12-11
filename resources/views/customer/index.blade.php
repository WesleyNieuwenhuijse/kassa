@extends('layouts.masterlayout')
@section('title','klanten')
@section('content')
@if ($customer !=null)
<table>
    <tr>
        <th>naam</th>
    </tr>
    @foreach($customer as $c)
    <tr>
        <td>{{$c->name}}</td>
    </tr>
    @endforeach
</table>

@endif
@endsection
