@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Courses')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.courses.index') }}">All Courses</a>
</div>
@include('admin.errors')

<form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 "><b>ID</b></label>
    <div class="col-md-6" >
        <input type="text" class="form-control" disabled value="{{$course->id}}" name="id">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Data</b></label>
    <div class="col-md-6" >
        <input type="date" class="form-control" value="{{$course->date}}" name="date">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 "><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" value="{{$course->title}}" name="title">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 "><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
        <img width="100" src="{{ asset('uploads/images/'.$course->image) }}" alt="">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Category</b></label>
    <div class="col-md-6" >
        <input type="text" class="form-control" value="{{$course->category}}"  name="category">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>field</b></label>
    <div class="col-md-6" >
        <input type="text" class="form-control" value="{{$course->field}}" name="field">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Price</b></label>
    <div class="col-md-6" >
        <input type="number" class="form-control" value="{{$course->price}}" name="price">
    </div>
    </div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Duration</b></label>
    <div class="col-md-6" >
        <input type="text" class="form-control" value="{{$course->duration}}" name="duration">
    </div>
</div>

<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0" ><b>Content</b></label>
    <div class="col-md-6" >
        <textarea class="form-control"name="content" rows="5">{{ $course->content }}</textarea>
    </div>

</div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Teacher</b></label>
    <div class="col-md-6">
        <select class="form-control" name="teacher_id">
            @foreach ($teachers as $item)
                <option @selected($item->id == $course->teacher_id) value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<button class="btn btn-success m-2"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban "></i> Cancel</button>
</form>

@stop


