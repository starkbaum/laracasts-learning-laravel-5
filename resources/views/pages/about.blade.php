@extends('app')


@section('content')

    <h1>About {{ $first }} {{ $last }}</h1>

    @if(count($people))
        <h3>People I like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif

@endsection