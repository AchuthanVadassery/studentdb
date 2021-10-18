@extends('main')
@section('admin')

<form action="{{route('exam.update',$exams->id)}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="name" > Exam Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail" value="{{$exams->name}}">
    <div id="emailHelp" class="form-text">Exam updation</div>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection('admin')