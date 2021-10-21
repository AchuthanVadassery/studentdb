@extends('main')
@section('admin')

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-head">
                    <h4>{{$student->name}}</h4>
                    <h5>Student</h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mark Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{route('student.edit',$student->id)}}" class="btn btn-info">Edit Profile</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$student->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$student->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{Carbon\Carbon::parse($student->dob)->format('d-m-Y')}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$student->address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Pincode</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$student->pincode}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Course</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$student->courseFind->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- <div class="mb-3">
                            <div class="form-group">
                                <label for="country">Select Exam</label>
                                <select name="exam_id" class="form-control" style="width:250px">
                                    <option value="">--- Select Exam ---</option>
                                    @foreach ($exams as $key => $exam)
                                    <option value="{{ $key }}">{{ $exam }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
                        @foreach($marks as $mark)
                        <div class="col">
                            <div class="col-md-6">
                                <label>{{$mark->findSubject->name}}</label>
                                <label>{{$mark->findExam->name}}</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$mark->mark}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection('admin')