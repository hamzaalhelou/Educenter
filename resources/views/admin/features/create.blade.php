@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Features')
@section('content')

@include('admin.errors')

<form action="{{ route('admin.features.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Icon</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Icon" class="form-control" name="icon">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" name="title">
    </div>
    </div>
<div class="row align-items-center mb-3">
    <label class="col-md-1 mb-0 m-2"><b>Content</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Content" class="form-control" name="content">
    </div>
    </div>
<button class="btn btn-success m-2"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


