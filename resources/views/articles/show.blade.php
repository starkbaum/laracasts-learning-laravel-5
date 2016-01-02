@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>
    <hr />

    <article>
        {{ $article->body }}
    </article>

    <h5>Tags:</h5>
    <ul>
        @foreach($article->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>

@endsection