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
                                    <p class="card-text">{{ $comic->description }}</p>
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
