@section('content')
    {!! Form::open(['url' => 'subcategory', 'method' => 'POST']) !!}
    {!! Form::token() !!}
    <div class="form">
        {!! Form::label('name','subcategory name:') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Maak subcategorie aan',array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}
    </div>

@endsection

@yield('content')
