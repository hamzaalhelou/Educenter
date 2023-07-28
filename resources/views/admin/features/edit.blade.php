@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Features')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.features.index') }}">All features</a>
</div>

<form action="{{ route('admin.features.update', $feature->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Icon</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Icon" class="form-control @error('icon') is-invalid @enderror" value="{{$feature->icon}}" name="icon">
        @error('icon')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Title</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{$feature->title}}" name="title">
        @error('title')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Content</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Content" class="form-control @error('content') is-invalid @enderror" value="{{ $feature->content }}"  name="content">
        @error('content')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<hr class="mt-10">
<div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
    <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
    <button class="btn btn-success ms-3"> <i class="fas fa-save"></i> Save</button>
</div>

</form>

@stop


