@extends('main')
@section('admin')

<div class="col-md-8">
  <div class="card">
    <div class="card-header">Update the exam details</div>
    <div class="card-body">
      <form action="{{route('exam.update',$exams->id)}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Exam Name</label>
          <input type="text" class="form-control" name="name" id="formGroupExampleInput" value="{{$exams->name}}" placeholder="Exam Name">
        </div>
        <button type="submit" id="clk" class="btn btn-primary">Save Change</button>
      </form>
    </div>
  </div>
</div>








<!-- <form action="{{route('exam.update',$exams->id)}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="name" > Exam Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail" value="{{$exams->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Save Change</button>
</form> -->

@endsection('admin')