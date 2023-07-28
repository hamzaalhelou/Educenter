@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Teachers')
@section('content')
<div class="text-right mb-4 m-4">
    <a class="btn btn-primary float-end" href="{{ route('admin.teacher.index') }}">All Teachers</a>
</div>

<form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0"><b>ID</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" class="form-control" disabled value="{{ $teacher->id }}" name="id">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Name</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ $teacher->name }}"  name="name">
        @error('name')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Image</b></label>
    <div class="col-md-6 ms-20" >
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
        <img width="100" src="{{ asset('uploads/images/'.$teacher->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Position</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Position" class="form-control @error('position') is-invalid @enderror" value="{{ $teacher->position }}" name="position">
        @error('position')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Link Facebook</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Facebook" class="form-control @error('fb_link') is-invalid @enderror" value="{{ $teacher->fb_link }}"name="fb_link">
        @error('fb_link')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
<label class="col-md-1 mb-0 required "><b>Link Instagram</b></label>
<div class="col-md-6 ms-20" >
    <input type="url" placeholder="Link Instagram" class="form-control @error('in_link') is-invalid @enderror" value="{{ $teacher->in_link }}" name="in_link">
    @error('in_link')
    <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
</div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Link Linkedln</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Linkedln" class="form-control @error('ln_link') is-invalid @enderror" value="{{ $teacher->ln_link }}" name="ln_link">
        @error('ln_link')
       <small class="invalid-feedback">{{ $message }}</small>
       @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>Link Gamil</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Gamil" class="form-control @error('gm_link') is-invalid @enderror" value="{{ $teacher->gm_link }}" name="gm_link">
        @error('gm_link')
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


