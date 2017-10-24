<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class movieController extends Controller
{
    public function listing(){
        $view = view('movies/list');

        $all_movies= \App\Movie::orderBy('title', 'asc')->get();
        $view->movies=$all_movies;

        return $view;
    }
    public function detail($id){
        $view = view('movies/detail');

        $movie = \App\Movie::find($id);
        $view->movie=$movie;
        return $view;
    }

    public function create() {
        $view = view('movies/new');
        return $view;
    }

    public function store($id=null) {
        // create movie object
        $movie = new \App\Movie();
        // fill it into the object but only the selected data in array
        $movie->fill(request()->only([
            'title',
            'year',
            'plot'
        ]));
        // save the movie
        $movie->save();
        // informing user of success
        session()->flash('success_message', 'The movie was successfully saved!');
                
        // redirect
        return redirect()->action('movieController@listing');
    }

    //public function store_old($id=null) {
        // store(Request $request2,$id=null)
        // dd($request2);  this is also a way
        //$request=request();
        //
        //if($request->has('title')) {
        //    $title = $request->input('title');
        //}

        //$request->all(); // all request data
        //$request_data = $request->only([ // only those request items  that are present in the array
        //    'title',
        //    'year',
        //    'plot'
        //]);
        //$request_data = $request->except([  // everything except the items that are present in the array
        //    '_token',
        //    'plot'
        //]);
        //dd($request_data);

        // create new object of class Movie
        //$movie = new \App\Movie();

        // fill gives an error
        // fill everything into the object
        //$movie->fill($request->all();

        // add some data from request into this object
        //$movie->fill($request->only([
        //    'title', 'year', 'plot'
        //]));

        // also possibility to add some data from request into this object
        //$movie->title = $request->input('title');
        //$movie->year = $request->input('year');
        //$movie->plot = $request->input('plot');
        //dd($movie);

    //}

    public function test_insert(){
        $movie = new \App\Movie();

        //$movie->title = 'Shannara';
        //$movie->year = 2016;
        //$movie->plot = 'The Chronnicles.';

        $movie->save();

        return 'Movie added! Thank You';
    }
}
