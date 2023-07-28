@extends('admin.app')

@section('title','Dashboard')
@section('titlegage','Courses')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.courses.index') }}">All Courses </a>
</div>
<form action="{{ route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <hr>
    <div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Data</b></label>
    <div class="col-md-6 ms-20" >
        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
        @error('date')
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
            <label class="col-md-1 mb-0 required"><b>Image</b></label>
            <div class="col-md-6 ms-20">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            </div>
     <div class="row align-items-center mb-3 m-8">
                <label class="col-md-1 mb-0 required"><b>Category</b></label>
                <div class="col-md-6 ms-20" >
                    <input type="text" placeholder="Category" class="form-control @error('category') is-invalid @enderror" name="category">
                    @error('category')
                    <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                </div>
    <div class="row align-items-center mb-3 m-8">
                    <label class="col-md-1 mb-0 required"><b>field</b></label>
                    <div class="col-md-6 ms-20" >
                        <input type="text" placeholder="field" class="form-control @error('field') is-invalid @enderror" name="field">
                        @error('field')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    </div>
    <div class="row align-items-center mb-3 m-8">
                        <label class="col-md-1 mb-0 required"><b>Price</b></label>
                        <div class="col-md-6 ms-20" >
                            <input type="number" placeholder="Price" class="form-control @error('price') is-invalid @enderror" name="price">
                            @error('price')
                           <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        </div>
    <div class="row align-items-center mb-3 m-8">
                            <label class="col-md-1 mb-0 required"><b>Duration</b></label>
                            <div class="col-md-6 ms-20" >
                                <input type="text" placeholder="Duration" class="form-control @error('duration') is-invalid @enderror" name="duration">
                                @error('duration')
                                <small class="invalid-feedback">{{ $message }}</small>
                                 @enderror
                            </div>
                        </div>
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required" ><b>Content</b></label>
        <div class="col-md-6 ms-20" >
            <textarea placeholder="Content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"></textarea>
            @error('content')
            <small class="invalid-feedback">{{ $message }}</small>
             @enderror
        </div>

    </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>Teacher</b></label>
        <div class="col-md-6 ms-20">
            <select class="form-control" name="teacher_id">
                @foreach ($teachers as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <hr class="mt-10">
    <div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
        <button type="button" onclick="history.back()" class="btn btn-secondary"><i class="fas fa-ban"></i> Cancel</button>
        <button class="btn btn-success ms-3"><i class="fas fa-save"></i> Save</button>

    </div>

    </form>
@stop
