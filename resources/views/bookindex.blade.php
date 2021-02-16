@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/add">Add item </a>
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Leg</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td><a href="{{action('App\Http\Controllers\BookController@edit', $book->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('App\Http\Controllers\BookController@destroy', $book->id)}}" method="post">
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
