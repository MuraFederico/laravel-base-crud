@extends('templates/base')

@section('title', 'Home')

@section('content')
    <a href="{{ route('comics.index') }}">COMICS</a>
@endsection

