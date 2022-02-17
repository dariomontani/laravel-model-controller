@extends('layouts.base')

@section('content')
    <div>
        @foreach ($movies as $movie)
            <p>{{$movie->title}}</p>
            <p>{{$movie->original_title}}</p>
            <p>{{$movie->nationality}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
        @endforeach
    </div>
    home
@endsection 