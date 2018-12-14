@section('content')
{!! Form::open(['url' => 'category', 'method' => 'POST']) !!}
{!! Form::token() !!}
    <div class="form">
        {!! Form::label('name','category name:') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Maak categorie aan',array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}
    </div>

@endsection

@yield('content')
