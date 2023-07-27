@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Sliders')
@section('content')

@include('admin.errors')

<form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row align-items-bottom mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" name="title">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Content</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Content" class="form-control" name="content">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-9"><b>Apply New</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Apply New" class="form-control" name="btn1_link">
    </div>
    </div>
<button class="btn btn-success m-9"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


