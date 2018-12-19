<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{!! Form::open(['url' => 'products','method'=>'POST']) !!}

{!! Form::token() !!}
<div class="form">

    {!! Form::label('name','product naam:') !!}
    {!! Form::text('name') !!}
    {!! Form::label('cost_price','inkoop prijs:') !!}
    {!! Form::number('cost_price') !!}
    {!! Form::label('sale_price','verkoop prijs:') !!}
    {!! Form::number('sale_price') !!}
    {!! Form::submit('Maak product aan', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}

</div>

</body>
</html>