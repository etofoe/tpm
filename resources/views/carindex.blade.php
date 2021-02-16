@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/car/add">Add item </a>
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
                <td><a href="{{action('App\Http\Controllers\CarsController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('App\Http\Controllers\CarsController@destroy', $car->id)}}" method="post">
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
