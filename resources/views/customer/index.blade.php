@extends('layouts.masterlayout')
@section('title','klanten')
@section('content')
@if ($customer !=null)
icon naar create klant
<a href="{{action('CustomerController@create')}}"><i class="fas fa-edit" ></i>klik hier om een nieuwe klant toe te voegen!</a>
<table>
    <tr>
        <th>naam</th>
        <th>rekening</th>
        <th>betaald</th>
        <th>actie</th>
    </tr>
    @foreach($customer as $c)
    <tr>
        <td>{{$c->name}}</td>
        <td>{{$c->invoice_id}}</td>
        @if($c->paid == 0)
            <td>nog niet betaald</td>
        @else
            <td>reeds betaald</td>
        @endif

        <td>
            <div class="table-icon">
                <button type="submit" onclick="return location.replace(window.location.href + '/1'); " style="border: 0; background: none;">
                    <i class="far fa-file" aria-hidden="true"></i>
                </button>
            </div>
            {{--<a href="{{action('CustomerController@show',array($c->id))}}"><i class="far fa-file"></i></a>--}}
            <div class="table-icon">
                <button type="submit" onclick="return location.replace(window.location.href + '/1/edit'); " style="border: 0; background: none;">
                    <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                </button>
            </div>
            {{--<a href="{{action('CustomerController@edit',array($c->id))}}"><i class="fas fa-pencil-alt"></i></a>--}}
            <div class="table-icon">
                {!! Form::open(['url' => 'customer/'.$c->id,'method' => 'POST']) !!}
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('Are you sure to delete this course ?');" style="border: 0; background: none;">
                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                </button>
                {!! Form::close() !!}
            </div>
            {{--<a href="{{action('CustomerController@destroy',array($c->id))}}"><i class="fas fa-trash-alt"></i></a>--}}
        </td>
    </tr>
    @endforeach
</table>

@endif
@endsection
{{--@section('content')--}}
    {{--{{var_dump($customer)}}--}}
{{--@endsection--}}