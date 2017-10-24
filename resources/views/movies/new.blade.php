@extends('movies/wrapper')

@section('content')
    <main class="d-flex justify-content-center mt-5 pt-5">
        <form class="w-50 border border-dark p-3" action="" method="post">

            {{ csrf_field() }}

            <div class="form-group d-flex w-75 mx-auto">
                <label class="mr-auto">Title:</label>
                <input class="form-control w-75" type="text" name="title">
            </div>

            <div class="form-group d-flex w-75 mx-auto">
                <label class="mr-auto">Year:</label>
                <input class="form-control w-75" type="text" name="year">
            </div>

            <div class="form-group d-flex w-75 mx-auto">
                <label class="mr-auto">Plot:</label>
                <textarea class="form-control w-75" id="plot_input" name="plot"></textarea>
            </div>

            <div class="form-group w-50 mx-auto">
                <input class="form-control w-50 mx-auto" type="submit" value="Submit">
            </div>
        </form>
    </main>

@stop
