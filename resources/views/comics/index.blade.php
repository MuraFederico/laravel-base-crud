@extends('templates/base')

@section('title', 'Comics List')

@section('content')
    <section id="comics">
        <div class="container">
            <h1>COMICS</h1>
            <div class="row row-cols-4 g-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="card h-100">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <p class="card-text">Price: {{ $comic->price }}$</p>
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
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $comics->links() }}
        </div>
    </section>
@endsection
