@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Journalist')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.journalists.index') }}">All Journalists</a>
</div>
@include('admin.errors')

<form action="{{ route('admin.journalists.update', $journalist->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 m-2"><b>Date</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Date" class="form-control" value="{{$journalist->date}}" name="date">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 m-2"><b>Writer</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Writer" class="form-control" value="{{$journalist->writer}}" name="writer">
    </div>
    </div>
<div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0 m-2"><b>Title</b></label>
    <div class="col-md-6" >
        <input type="text" placeholder="Title" class="form-control" value="{{$journalist->title}}" name="title">
    </div>
    </div>
    <div class="row align-items-center mb-3 m-3">
        <label class="col-md-1 mb-0 m-2" ><b>Content</b></label>
        <div class="col-md-6" >
            <textarea class="form-control"name="content" rows="5">{{ $journalist->content }}</textarea>
        </div>

    </div>
<button class="btn btn-success m-2"> <i class="fas fa-save"></i> Save</button>
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban "></i> Cancel</button>
</form>

@stop


