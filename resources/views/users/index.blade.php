@extends('layout')

@section('section_header')
    <h1>Users</h1>
@stop

@section('section_description')
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Birthdate</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td><a href="users/{{ $user->id }}">{{ $user->name }}</a></td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->birth }}</td>
        </tr>
        @endforeach
    </table>
@stop
