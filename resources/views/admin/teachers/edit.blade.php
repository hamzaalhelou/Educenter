@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Teachers')
@section('content')
<div class="text-right mb-4 m-4">
    <a class="btn btn-primary float-end" href="{{ route('admin.teacher.index') }}">All Teachers</a>
</div>

@include('admin.errors')

<form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="row align-items-bottom mb-3">
    <label class="col-md-1 mb-0 m-9"><b>ID</b></label>
    <div class="col-md-6" >
        <input type="text" class="form-control" disabled value="{{ $teacher->id }}" name="id">
    </div>
    </div>

<div class="row align-items-bottom mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Name</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Name" class="form-control" value="{{ $teacher->name }}"  name="name">
    </div>
    </div>

<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
        <img width="100" src="{{ asset('uploads/images/'.$teacher->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Position</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Position" class="form-control" value="{{ $teacher->position }}" name="position">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Facebook</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Facebook" class="form-control" value="{{ $teacher->fb_link }}"name="fb_link">
    </div>
    </div>
<div class="row align-items-center mb-3">
<label class="col-md-1 mb-0 m-9"><b>Link Instagram</b></label>
<div class="col-md-6" >
    <input type="url" placeholder="Link Instagram" class="form-control" value="{{ $teacher->in_link }}" name="in_link">
</div>
</div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Linkedln</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Linkedln" class="form-control" value="{{ $teacher->ln_link }}" name="ln_link">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Gamil</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Gamil" class="form-control" value="{{ $teacher->gm_link }}" name="gm_link">
    </div>
    </div>
<button class="btn btn-success"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


