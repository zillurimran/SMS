@extends('crud.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Edit Student</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="s_name" class="form-label">Student Name</label>
                                <input type="hidden" name="student_id" value="{{$student->id}}">
                                <input type="text" class="form-control" value="{{$student->s_name}}" name="s_name" placeholder="s_name here...">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" value="{{$student->phone}}" name="phone" placeholder="phone here...">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{$student->email}}" name="email" placeholder="email here...">
                            </div>
                            <div class="mb-3">
                                <label for="dept_id" class="form-label">Dept. Name</label>
                                <select name="dept_name" value=" " id="" class="form-select">
                                    <option value="" selected disabled>select department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="BBA">BBA</option>
                                    <option value="EEE">EEE</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" value="" name="image" >
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" value="{{$student->address}}" name="address" placeholder="address here...">
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

