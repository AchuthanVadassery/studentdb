@extends('main')
@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row">
            <!-- students details table -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Exam Details</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Exam Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($exams as $exam)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$exam->name}}</td>
                                <td>
                                    <div>
                                        <a href="{{'/exam_edit/'.$exam->id}}" class="btn btn-info">Edit</a>
                                        <a href="{{'/exam_delete/'.$exam->id}}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- students details table end -->

            <!-- student form to enter the details -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enter The Exam Details</div>
                    <div class="card-body">
                        <form action="{{route('exam.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Exam Name">
                                <div class="text-danger">{{$errors->first('name')}}</div>
                            </div>
                            <button type="submit" id="clk" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- student form to enter the details -->

        </div>
    </div>
</div>

@endsection('admin')