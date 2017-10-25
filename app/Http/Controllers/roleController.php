<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieRole;
class roleController extends Controller
{
    public function create() {
        $view = view('roles/edit');
        $view->role = new MovieRole();
        $view->movies = \App\Movie::all();
        
        return $view;
    }
    public function store($id = null) {
        if($id)
        {
            $role = MovieRole::findOrFail($id);
        }
        else
        {
            $role = new MovieRole();
        }
        
        $role->fill(request()->only([
            'movie_id',
            'name'
        ]));
        
        $role->save();
        
        session()->flash('success_message', 'The role was successfully saved');
        
        return redirect()->action('roleController@edit', ['id' => $role->id]);
    }
    public function edit($id = null) {
        $role = MovieRole::findOrFail($id);
        
        $view = view('roles/edit');
        $view->role = $role;
        $view->movies = \App\Movie::all();
        
        return $view;
    }
}
