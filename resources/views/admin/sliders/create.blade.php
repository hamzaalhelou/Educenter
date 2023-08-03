@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Sliders'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Add New Slider') }}</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.sliders.index') }}">{{ __('admin.All Sliders') }}</a>
</div>

<form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data" class="container">
@csrf
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Title') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Title" class="form-control @error('title') is-invalid @enderror " name="title">
        @error('title')
            <small class="invalid-feedback">{{ $message }}</small>
        @enderror

    </div>
    </div>
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required" ><b>{{ __('admin.Content') }}</b></label>
        <div class="col-md-6 ms-20" >
            <textarea placeholder="Content" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"></textarea>
            @error('content')
            <small class="invalid-feedback">{{ $message }}</small>
             @enderror
        </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Image') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
            <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Apply New') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Apply New" class="form-control @error('btn1_link') is-invalid @enderror" name="btn1_link">
        @error('btn1_link')
            <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <hr class="mt-10">
    <div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
         <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i>{{ __('admin.Cancel') }}</button>
         <button class="btn btn-success ms-3"> <i class="fas fa-save"></i>{{ __('admin.Save') }}</button>
    </div>

</form>

@stop


