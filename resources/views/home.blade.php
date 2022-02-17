@extends('layouts.base')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card">
            <h1>{{$movie->title}}</h1>
            <p>Original Title: {{$movie->original_title}}</p>
            <p>Nationality: {{$movie->nationality}}</p>
            <p>Date: {{$movie->date}}</p>
            <p>Vote: {{$movie->vote}}</p>
        </div>
        @endforeach
    </div>
@endsection 