@extends('movies/wrapper')

@section('title')
    <title>{{$movie->title}}</title>
@stop

@section('content')
    <main class="d-flex flex-row justify-content-center pt-5">
        <div class="text-center mt-5 pt-5">
            <h1>{{$movie->title}}</h1>
            <p>{{$movie->plot}}</p>
        </div>
    </main>
@stop
