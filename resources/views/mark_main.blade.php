<!-- ajax for course and subject  -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('select[name="course_id"]').on('click', function() {
            var courseID = jQuery(this).val();
            if (courseID) {
                jQuery.ajax({
                    url: 'dropdownlist/getSubject/' + courseID,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        jQuery('select[name="subject_id"]').empty();
                        jQuery.each(data, function(key, value) {
                            $('select[name="subject_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="subject_id"]').empty();
            }
        });
    });

    jQuery(document).ready(function() {
        jQuery('select[name="course_id"]').on('click', function() {
            var courseID = jQuery(this).val();
            if (courseID) {
                jQuery.ajax({
                    url: 'dropdownlist/getStudent/' + courseID,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        jQuery('select[name="student_id"]').empty();
                        jQuery.each(data, function(key, value) {
                            $('select[name="student_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="student_id"]').empty();
            }
        });
    });
</script>


<div class="py-12">
    <div class="container">
        <div class="row">
            <!-- students details table -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mark Entries</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Exam Name</th>
                                <th scope="col">Mark</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($marks as $mark)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$mark->findStudent->name}}</td>
                                <td>{{$mark->findSubject->name}}</td>
                                <td></td>
                                <td>{{$mark->mark}}</td>
                                <td>
                                    <div>
                                        <a href="" class="btn btn-danger">More Details</a>
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
                    <div class="card-header">Enter The Mark</div>
                    <div class="card-body">
                        <form action="{{route('mark.store')}}" method="GET">
                            @csrf
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="country">Select Exam Type:</label>
                                    <select name="exam_id" class="form-control" style="width:250px">
                                        <option value="">--- Select Exam ---</option>
                                        @foreach ($exams as $key => $exam)
                                        <option value="{{ $key }}">{{ $exam }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="country">Select Course:</label>
                                    <select name="course_id" class="form-control" style="width:250px">
                                        <option value="">--- Select course ---</option>
                                        @foreach ($courses as $key => $course)
                                        <option value="{{ $key }}">{{ $course }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="country">Select Student:</label>
                                    <select name="student_id" class="form-control" style="width:250px">
                                        <option value="">--- Select Student ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="country">Select Subject:</label>
                                    <select name="subject_id" class="form-control" style="width:250px">
                                        <option value="">--- Select Subject ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Name</label>
                                <input type="number" class="form-control" name="mark" id="formGroupExampleInput" placeholder="Mark">
                                <div class="text-danger"></div>
                            </div>

                            <button type="submit" id="clk" class="btn btn-primary">Add Mark</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- student form to enter the details -->

        </div>
    </div>
</div>


@endsection('admin')
