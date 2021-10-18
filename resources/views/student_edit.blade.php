@extends('main')
@section('admin')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">Update The Student Details</div>
        <div class="card-body">
            <form action="{{route('student.update',$students->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$students->name}}" id="formGroupExampleInput" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$students->email}}" id="formGroupExampleInput2" placeholder="Mail ID">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">DOB</label>
                    <input type="date" class="form-control" name="dob" value="{{$students->dob}}" id="formGroupExampleInput2" placeholder="Date of birth">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$students->address}}" id="formGroupExampleInput2" placeholder="Place">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Pin Code</label>
                    <input type="number" class="form-control" name="pincode" value="{{$students->pincode}}" id="formGroupExampleInput2" placeholder="Pin Code">
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="country">Select Course:</label>
                        <select name="course_id" class="form-control" style="width:250px">
                            <option value="">--- Select Course ---</option>
                            @foreach ($courses as $key => $course)
                            <option value="{{ $key }}">{{ $course }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save change</button>
            </form>
        </div>
    </div>
                    
@endsection