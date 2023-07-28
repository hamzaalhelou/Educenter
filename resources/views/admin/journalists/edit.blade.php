@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Journalist')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.journalists.index') }}">All Journalists</a>
</div>
<form action="{{ route('admin.journalists.update', $journalist->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Date</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Date" class="form-control @error('date') is-invalid @enderror" value="{{$journalist->date}}" name="date">
        @error('date')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Writer</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Writer" class="form-control @error('writer') is-invalid @enderror" value="{{$journalist->writer}}" name="writer">
        @error('writer')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Title</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{$journalist->title}}" name="title">
        @error('title')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required" ><b>Content</b></label>
        <div class="col-md-6 ms-20" >
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5">{{ $journalist->content }}</textarea>
            @error('content')
           <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
<hr class="mt-10">
<div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
    <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban "></i> Cancel</button>
    <button class="btn btn-success ms-3"> <i class="fas fa-save"></i> Save</button>
</div>


</form>

@stop


