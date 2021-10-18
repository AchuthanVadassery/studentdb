@extends('main')
@section('admin')

<div class="py-12">
        <div class="container">
            <div class="row">                        
                
                <!-- student form to enter the details -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Student Registration</div>
                        <div class="card-body">
                            <form action="{{route('student.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Full Name">
                                    <div class="text-danger">{{$errors->first('name')}}</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Mail ID">
                                    <div class="text-danger">{{$errors->first('email')}}</div>

                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">DOB</label>
                                    <input type="date" class="form-control" name="dob" id="formGroupExampleInput2" placeholder="Date of birth">
                                    <div class="text-danger">{{$errors->first('dob')}}</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="formGroupExampleInput2" placeholder="Address">
                                    <div class="text-danger">{{$errors->first('address')}}</div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Pin Code</label>
                                    <input type="number" class="form-control" name="pincode" id="formGroupExampleInput2" placeholder="Pin Code">
                                    <div class="text-danger">{{$errors->first('pincode')}}</div>
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
                                <button type="submit" id="clk" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>      
                <!-- student form to enter the details -->
      
            </div>    
        </div>
    </div>

@endsection('admin')