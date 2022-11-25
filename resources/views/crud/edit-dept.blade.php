@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Edit Department</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.dept')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="s_name" class="form-label">Department Name</label>
                                <input type="hidden" name="dept_id" value="{{$department->id}}">
                                <input type="text" class="form-control" value="{{$department->dept_name}}" name="dept_name" placeholder="dept_name here...">
                            </div>


                            <div class="mb-3">
                                <label for="dept_id" class="form-label">Dept. Code</label>
                                <input type="text" class="form-control" value="{{$department->dept_code}}" name="dept_code" placeholder="dept_code here...">


                            </div>


                            <div class="mb-3">

                                <input type="submit" class="form-control btn btn-danger"  value="Submit">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

