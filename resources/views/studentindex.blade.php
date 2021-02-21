@extends('layouts.app')

@section('actions')
    <a class="nav-item navbar-expand-md" href="/student/add">Add item </a>
@endsection
@section('content')
    <h2 align="center">Student Information</h2><br/>
    <div class="container">
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Student</th>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        ?>
        @foreach($students as $key =>$student)

                <tr>
                    <td><?php echo $i; $i++;?></td>
                    <td>{{$student['id']}}</td>
                    <td>{{$student['name']}}</td>
                    <td><a href="{{action('App\Http\Controllers\FirebaseController@edit', $student['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('student-delete')}}" method="post">
                            @csrf
                            <input name="ref_id" type="hidden" value="{{$key}}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
