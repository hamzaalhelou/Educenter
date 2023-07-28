@extends('admin.app')

@section('title','Dashboard')
@section('titlegage','Courses')
@section('content')
<div class="text-right mb-4 m-4">
    <a class="btn btn-primary float-end " href="{{route('admin.courses.create')}}">Add New Course</a>
</div>
@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary">
        <th>ID</th>
        <th>Date</th>
        <th>Title</th>
        <th>Image</th>
        <th>Category</th>
        <th>field</th>
        <th>Price</th>
        <th>Duration</th>
        <th>Content</th>
        <th>Teacher</th>
        <th>Actions</th>
    </tr>
    @foreach ($courses as $course)
    <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->date}}</td>
        <td>{{$course->title}}</td>
        <td><img width="50" src="{{ asset('uploads/images/'.$course->image) }}" alt=""></td>
        <td>{{$course->category}}</td>
        <td>{{$course->field}}</td>
        <td>{{$course->price}}</td>
        <td>{{$course->duration}}</td>
        <td>{{$course->content}}</td>
        <td>{{$course->teacher_id}}</td>
        <td>
            <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.courses.edit',$course->id) }}"><i class="fas fa-edit"></i> </a>
            <form class="d-inline" method="POST" action="{{ route('admin.courses.destroy',$course->id) }}">
            @csrf
           @method('delete')
           <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i> </button>
          </form>
        </td>
    </tr>

    @endforeach
</table>
{{ $courses->links() }}
@stop
