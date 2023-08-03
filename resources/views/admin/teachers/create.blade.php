@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Teachers'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Add New Teacher') }}</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.teacher.index') }}">{{ __('admin.All Teachers') }}</a>
</div>
<form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Name') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name">
        @error('name')
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
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Position') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="Position" class="form-control @error('position') is-invalid @enderror" name="position">
        @error('position')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Facebook') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Facebook" class="form-control @error('fb_link') is-invalid @enderror" name="fb_link">
        @error('fb_link')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
<label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Instagram') }}</b></label>
<div class="col-md-6 ms-20" >
    <input type="url" placeholder="Link Instagram" class="form-control @error('in_link') is-invalid @enderror" name="in_link">
    @error('in_link')
    <small class="invalid-feedback">{{ $message }}</small>
     @enderror
</div>
</div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Linkedln') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Linkedln" class="form-control @error('ln_link') is-invalid @enderror" name="ln_link">
        @error('ln_link')
       <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Gamil') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="Link Gamil" class="form-control @error('gm_link') is-invalid @enderror" name="gm_link">
        @error('gm_link')
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


