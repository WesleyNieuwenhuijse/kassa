@extends('layouts.masterlayout')
@section('title','klant edit')
@section('content')

    {!! Form::open(['url' => 'customer/'.$customer->id,'method' => 'POST']) !!}

    {{ csrf_field() }}
    {{method_field('PUT')}}
    {!! Form::label('name','naam:') !!}
    {!! Form::text('name',$customer->name) !!}
    {!! Form::label('paid','betaald:') !!}
    {!! Form::select('paid',[false => 'nog openstaand',true => 'reeds betaald'],false) !!}
    {!! Form::submit('pas klant aan.',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection