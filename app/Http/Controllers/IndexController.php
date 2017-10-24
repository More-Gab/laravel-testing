<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $view = view('index');
        return $view;
    }

    public function movies_homepage(){
        $view =  view('movies/homepage');
        return $view;
    }
}
