@extends('main')
@section('admin')

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-head">
                    <h4>{{$students->name}}</h4>
                    <h5>Student</h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Course Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <a href="{{route('student.edit',$students->id)}}" class="btn btn-info">Edit Profile</a>
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
                                <p>{{$students->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$students->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Berth</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{Carbon\Carbon::parse($students->dob)->format('d-m-Y')}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$students->address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Pincode</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$students->pincode}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Course</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$students->courseFind->name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Course Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$students->courseFind->name}}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Subject Name</label>
                            </div>
                            <div class="col-md-6">
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

@endsection('admin')