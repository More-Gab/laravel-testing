<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        // $users = DB::select('SELECT * FROM users');
        $users = DB::table('users')->get();

        return view('users/index', compact(['users']));
    }

    public function show($id) {
        //$user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);
        //$user = DB::table('users')->where('id', $id)->first();

        $user = DB::table('users')->find($id);

        return view('users/show', compact(['user']));
    }
}