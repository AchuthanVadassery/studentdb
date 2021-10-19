@extends('main')
@section('admin')

<form action="{{route('subject.update',$subjects->id)}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name"> Subject Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail" value="{{$subjects->name}}">
    <!-- <label for="name" > Course</label>
    <input type="text" name="course_id" class="form-control" id="exampleInputEmail" value="{{$subjects->course_id}}"> -->
    <div>
      <select name="course_id" value="{{$subjects->course_id}}">
        @foreach($data as $row)
        <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
      </select>
    </div>


    <div id="emailHelp" class="form-text">Subject updation</div>
    <!-- @error('category_name')
  <span>{{$message}}</span>
  @enderror -->
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>



@endsection('admin')