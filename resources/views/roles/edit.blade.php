@extends('movies/wrapper')

@section('content')



<main class="mt-5 pt-5">

    @if ($role->movie)
        <h1 class="text-center mt-5 display-2">{{ $role->movie->title }}</h1>
        <p class="text-center mt-1">{{ $role->movie->plot}} </p>
        <div class="text-center">
            <h2>Other roles</h2>
            <ul>
                @foreach($role->movie->movie_roles as $one_role)
                    <li>{{ $one_role->name }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="w-25 mx-auto p-3 border border-dark rounded" action="" method="post">

        {{ csrf_field() }}

        <div class="form-group ml-4">
            <label for="movie_id_select">Name:</label><br>
            <select name="movie_id" id="movie_id_select">
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}"{{ $movie->id == $role->movie_id ? ' selected' : '' }}>{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group ml-4">
            <label for="name_input">Name:</label><br>
            <input class="form-control w-50" type="text" name="name" value="{{ $role->name }}" id="name_input">
        </div>

        <div class="form-group ml-4">
            <input class="btn btn-primary" type="submit" value="save">
        </div>

    </form>
</main>
@stop