
@extends('layouts.masterlayout')
@section('content')
    {!! Form::open(['url' => 'customer','method' => 'POST']) !!}

    {{ csrf_field() }}

    {!! Form::label('name','naam:') !!}
    {!! Form::text('name') !!}
    {!! Form::submit('maak klant aan.',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection