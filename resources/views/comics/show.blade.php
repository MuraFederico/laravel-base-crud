@extends('templates/base')

@section('title', $comic->title)

@section('content')
    <div class="container d-flex p-3">
        <img class="h-100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="content ps-2">
            <h3>{{ $comic->title }}</h3>
            <p>{{ $comic->description }}</p>
            <p>Price: {{ $comic->price }}</p>
            <p>Aviable From: {{ $comic->sale_date }}</p>
            <p>Series: {{ $comic->series }}</p>
            <p>Type: {{ $comic->type }}</p>
            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
            <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                @csrf
                @method('delete')
                <button class="btn btn-danger">DELETE</button>
            </form>
        </div>
    </div>
@endsection
