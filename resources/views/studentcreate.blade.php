@extends('layouts.app')
@section('actions')
    <a class="nav-item navbar-expand-md" href="/school/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Student Add</h2><br/>
    <form method="post" action="{{url('student/add')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Location">ID:</label>
                <input type="text" class="form-control" name="id">
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
