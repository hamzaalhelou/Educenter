@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Sliders')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.sliders.index') }}">All Sliders</a>
</div>
@include('admin.errors')

<form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" value="{{$slider->title}}" name="title">
    </div>
    </div>

<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Content</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Content" class="form-control" value="{{ $slider->content }}"  name="content">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
        <img width="100" src="{{ asset('uploads/images/'.$slider->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Apply New</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Apply New" class="form-control" value="{{ $slider->btn1_link }}" name="btn1_link">
    </div>
    </div>
<button class="btn btn-success m-2"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban "></i> Cancel</button>
</form>

@stop


