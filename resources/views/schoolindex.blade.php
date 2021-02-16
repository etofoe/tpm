@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/school/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">School Information</h2><br/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($schools as $school)
            <tr>
                <td>{{$school->id}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->location}}</td>
                <td><a href="{{action('App\Http\Controllers\SchoolController@edit', $school->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('App\Http\Controllers\SchoolController@destroy', $school->id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
