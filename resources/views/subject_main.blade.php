@extends('main')
@section('admin')

<div class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Subjects</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL NO</th>

                <th scope="col">Subject Name</th>
                <th scope="col">Course</th>

                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>


              <tr>
                @php($i=1)
                @foreach($subjects as $subject)
                <th scope="row">{{$i++}}</th>

                <td>{{$subject->name}}</td>
                <td>{{$subject->user->name}}</td>

                <td>
                  <div>
                    <a href="{{'/subject_edit/'.$subject->id}}" class="btn btn-info">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
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
              <div class="card-header">Add Subject Details</div>
              <div id="contact_form">
                <form action="{{route('subject.store')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="name"> Subject Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail">
                    <div class="alert-danger">{{$errors->first('name')}}</div>
                    <div>
                      <label> Course</label>
                      <select name="course_id" class="form-control">
                        @foreach($data as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                      </select>
                    </div>
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