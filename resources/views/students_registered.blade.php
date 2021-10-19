@extends('main')
@section('admin')

<!-- students details table -->
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Students Details</div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php($i=1)
                @foreach($students as $student)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->courseFind->name}}</td>
                    <td>
                        <div>
                            <a href="" class="btn btn-info">Add Mark</a>
                            <a href="{{route('student.profile',$student->id)}}" class="btn btn-danger">More Details</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- students details table end -->

@endsection('admin')