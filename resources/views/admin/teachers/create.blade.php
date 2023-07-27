@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Teachers')
@section('content')

@include('admin.errors')

<form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row align-items-bottom mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Name</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Name" class="form-control" name="name">
    </div>
    </div>

<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Position</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Position" class="form-control" name="position">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Facebook</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Facebook" class="form-control" name="fb_link">
    </div>
    </div>
<div class="row align-items-center mb-3">
<label class="col-md-1 mb-0 m-9"><b>Link Instagram</b></label>
<div class="col-md-6" >
    <input type="url" placeholder="Link Instagram" class="form-control" name="in_link">
</div>
</div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Linkedln</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Linkedln" class="form-control" name="ln_link">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Link Gamil</b></label>
    <div class="col-md-6" >
        <input type="url" placeholder="Link Gamil" class="form-control" name="gm_link">
    </div>
    </div>
<button class="btn btn-success m-9"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


