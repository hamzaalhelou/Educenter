@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Events')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.events.index') }}">All Events</a>
</div>
<form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Date</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Date" class="form-control @error('date') is-invalid @enderror" value="{{$event->date}}" name="date">
        @error('date')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Image</b></label>
    <div class="col-md-6 ms-20" >
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
        <img width="100" src="{{ asset('uploads/images/'.$event->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Addres</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Addres" class="form-control  @error('address') is-invalid @enderror" value="{{$event->address}}" name="address">
        @error('address')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required" ><b>Content</b></label>
        <div class="col-md-6 ms-20" >
            <textarea class="form-control @error('content') is-invalid @enderror"name="content" rows="5">{{ $event->content }}</textarea>
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


