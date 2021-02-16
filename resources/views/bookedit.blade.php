@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/car/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Edit Book Information</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{action('App\Http\Controllers\BookController@update', $id)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Title">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$book->title}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Author">Author:</label>
                <input type="text" class="form-control" name="author" value="{{$book->author}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
