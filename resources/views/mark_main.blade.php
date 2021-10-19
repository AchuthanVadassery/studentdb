@extends('main')
@section('admin')
<label> Course</label>
<select name="course_id" id="course_id" class="form-control">
    @foreach($data as $row)
    <option value="{{$row->id}}">{{$row->name}}</option>
    @endforeach
</select>
<label>Subject</label>
<select name="name" id="name" class="form-control">

</select>

<script type="text/javascript">
$(document).ready(function(){
    $('#course_id').change(function(){
       var id=$(this).val();
       var token=$('input[name="_token"]').val();
       $.ajax({
          url:'dropdownlist/getSubject/',
          method:'post',
          dataType:'json',
          data:{id:id,token:token},
          success:function(result){
              $('#name').html(result);
          }
       });
    });
})
</script>

@endsection('admin')