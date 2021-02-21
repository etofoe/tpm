@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/car/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Edit Student Info </h2><br/>
    <div class="container">
    </div>
    <form method="post" action='{{route('student-edit')}}'>
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$student->name}}">
            </div>
            <input type="hidden" id="ref_id" name="ref_id" value="{{$student->ref_id}}">
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Location">ID:</label>
                <input type="text" class="form-control" id="id" name="id" value="{{$student->id}}">
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
