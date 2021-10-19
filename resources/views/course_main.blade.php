@extends('main')
@section('admin')

<div class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Courses</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL NO</th>
                <th scope="col">Course Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @php($i=1)
                @foreach($courses as $course)
                <th scope="row">{{$i++}}</th>
                <td>{{$course->name}}</td>
                <td>
                  <div>
                    <a href="{{'/courseedit/'.$course->id}}" class="btn btn-info">Edit</a>
                    <a href="{{'/coursedelete/'.$course->id}}" class="btn btn-danger">Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- </div> -->
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Add Course Details</div>
              <div id="contact_form">
                <form action="{{route('course.store')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="name"> Course Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail">
                    <div class="alert-danger">{{$errors->first('student_name')}}</div>
                  </div>
                  <button type="submit" class="btn btn-primary">Add</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection('admin')