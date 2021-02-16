@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/car/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Add New Car</h2><br/>
    <div class="container">
    </div>
    <form method="post" action="{{url('car/add')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Make">Make:</label>
                <input type="text" class="form-control" name="make">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Model:</label>
                <input type="text" class="form-control" name="model">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection

