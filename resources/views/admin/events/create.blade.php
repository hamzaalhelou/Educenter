@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Events')
@section('content')

@include('admin.errors')

<form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row align-items-bottom mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Date</b></label>
    <div class="col-md-6" >
        <input type="date" placeholder="Date" class="form-control" name="date">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Image</b></label>
    <div class="col-md-6" >
        <input type="file" class="form-control" name="image">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Addres</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Addres" class="form-control" name="address">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3 m-3">
    <label class="col-md-1 mb-0" ><b>Content</b></label>
    <div class="col-md-6" >
        <textarea placeholder="Content" class="form-control" name="content" rows="5"></textarea>
    </div>
</div>
<button class="btn btn-success m-3"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i> Cancel</button>
</form>

@stop


