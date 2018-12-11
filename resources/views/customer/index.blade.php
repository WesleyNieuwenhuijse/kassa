@extends('layouts.masterlayout')
@section('title','klanten')
@section('content')
@if ($customer !=null)
{{--icon naar create klant--}}
<a href="{{action('CustomerController@create')}}"><i class="fas fa-edit" ></i>klik hier om een nieuwe klant toe te voegen!</a>
<table>
    <tr>
        <th>naam</th>
        <th>actie</th>
    </tr>
    @foreach($customer as $c)
    <tr>
        <td>{{$c->name}}</td>
        <td>
            <a href="{{action('CustomerController@show',array($c->id))}}"><i class="far fa-file"></i></a>
            <a href="{{action('CustomerController@edit',array($c->id))}}"><i class="fas fa-pencil-alt"></i></a>
            {!! Form::open(['url' => 'customer/'.$c->id,'method' => 'POST']) !!}
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            {!! Form::submit() !!}
            {!! Form::close() !!}
            {{--<a href="{{action('CustomerController@destroy',array($c->id))}}"><i class="fas fa-trash-alt"></i></a>--}}
        </td>
    </tr>
    @endforeach
</table>

@endif
@endsection
