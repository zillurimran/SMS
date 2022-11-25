@extends('crud.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Add Student</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('new.student')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="s_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control" name="s_name" placeholder="s_name here...">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone here...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email here...">
                        </div>
                        <div class="mb-3">
                            <label for="dept_id" class="form-label">Dept. Name</label>
                            <select name="dept_name" class="form-select">
                                <option value="" selected disabled>select department</option>
                                @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" >
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="address here...">
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
