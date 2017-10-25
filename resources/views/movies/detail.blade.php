@extends('movies/wrapper')

@section('title')
    <title>{{$movie->title}}</title>
@stop

@section('content')
    <main class="d-flex flex-column justify-content-center align-content-center pt-5">
        <div class="text-center mt-5 pt-5">
            <h1>{{$movie->title}}</h1>
            <p>{{$movie->plot}}</p>
            <a href="{{ action('movieController@edit', ['id'=>$movie->id]) }}" class="btn btn-dark">Edit</a>
        </div>
        <div class="text-center">
            <h2>Roles</h2>
            <ul>
                @foreach($movie->movie_roles as $role)
                    <li>{{ $role->name }}</li>
                @endforeach
            </ul>
        </div>
    </main>
@stop
