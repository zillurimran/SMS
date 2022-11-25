@extends('crud.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Manage Department</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Action</th>

                            </tr>
                            @php $i=1; @endphp
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$department->dept_name}}</td>
                                    <td>{{$department->dept_code}}</td>
                                   <td>
                                        <a href="{{route('edit.dept',['id'=>$department->id])}}" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deleteDept').submit()">Delete</a>

                                       <form action="{{route('delete.dept')}}" method="post" id="deleteDept" >
                                           @csrf
                                           <input type="hidden" name="dept_id" value="{{$department->id}}">
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



