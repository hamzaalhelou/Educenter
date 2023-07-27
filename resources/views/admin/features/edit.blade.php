@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Features')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.features.index') }}">All features</a>
</div>
@include('admin.errors')

<form action="{{ route('admin.features.update', $feature->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Icon</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Icon" class="form-control" value="{{$feature->icon}}" name="icon">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" value="{{$feature->title}}" name="title">
    </div>
    </div>

<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Content</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Content" class="form-control" value="{{ $feature->content }}"  name="content">
    </div>
    </div>
<button class="btn btn-success m-9"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


