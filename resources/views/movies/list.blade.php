@extends('movies/wrapper')

@section('title')
    <title>List</title>
@stop

@section('content')
    <main class="d-flex flex-row justify-content-center pt-5">
        <div class="mt-5 pt-5">
            <h1 class="display-3">List of movies</h1>

            <ul class="text-center list-group">
                @foreach($movies as $movie)
                    <li class="list-group-item bg-warning border-dark">
                        <a class="text-dark" href="{{route('movies detail', ['id'=>$movie->id])}}">
                            {{$movie->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@stop