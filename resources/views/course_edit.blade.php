@extends('main')
@section('admin')

<form action="{{route('course.update',$courses->id)}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name"> Course Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail" value="{{$courses->name}}">
    <div id="emailHelp" class="form-text">Course updation</div>

  </div>


  <button type="submit" class="btn btn-primary">Add</button>
</form>



@endsection('admin')