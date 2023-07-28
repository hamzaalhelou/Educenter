@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Features')
@section('content')


<form action="{{ route('admin.features.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Icon</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Icon" class="form-control @error('icon') is-invalid @enderror" name="icon">
        @error('icon')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Title</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror" name="title">
        @error('title')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Content</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Content" class="form-control @error('content') is-invalid @enderror" name="content">
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


