@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/car/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Edit Car Make and Model</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{action('App\Http\Controllers\CarsController@update', $id)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Make">Make:</label>
                <input type="text" class="form-control" name="make" value="{{$car->make}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Model:</label>
                <input type="text" class="form-control" name="model" value="{{$car->model}}">
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
