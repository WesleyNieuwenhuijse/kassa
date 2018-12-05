<?php
@section('content')

    {!! Form::open(array(['url' => 'products', 'method'=>'POST'])) !!}

    {!! Form::token() !!}
    <div class="create">

        {!! Form::label('name','product naam:') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Maak een product aan', array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}

    </div>

@endsection