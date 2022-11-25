@extends('crud.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Manage Student</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Dept. Name</th>
                            <th>Dept. Code</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1; @endphp
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$student->s_name}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->dept_name}}</td>
                                <td>{{$student->dept_code}}</td>
                                <td>{{$student->address}}</td>
                                <td>
                                    <img src="{{$student->image}}" alt="" height="50px" width="50px">
                                </td>
                                <td>
                                    <a href="{{route('edit',['id'=>$student->id])}}" class="btn btn-warning">Edit</a>


                                    <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deleteStudent').submit()">Delete</a>
                                    <form action="{{route('delete.student')}}" method="post" id="deleteStudent">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{$student->id}}">
                                    </form>


                                </td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



