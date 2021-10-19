@extends('main')
@section('admin')
<form action="{{ route('search') }}" method="GET">
<label> Course</label>
    <!-- <select name="search" class="form-control">
      @foreach($data as $row)
      <option value="{{$row->id}}">{{$row->name}}</option>
      @endforeach
</select> -->
<input type="date" class="form-control" name="search">
<button type="submit" class="btn btn-primary">Add</button>
</form>

<div>
@if($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div class="post-list">
            <p>{{ $post->name }}</p>
        </div>
    @endforeach
    <a class="btn btn-primary" href="{{route('pdf')}}">Download</a>
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
</div>

@endsection('admin')