@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Events'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Add New Event') }}</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.events.index') }}">{{ __('admin.All Events') }}</a>
</div>
<form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Date') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="date" placeholder="{{ __('admin.Date') }}" class="form-control @error('date') is-invalid @enderror" name="date">
        @error('date')
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
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Addres') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Addres') }}" class="form-control @error('address') is-invalid @enderror" name="address">
        @error('address')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required" ><b>{{ __('admin.Content') }}</b></label>
    <div class="col-md-6 ms-20" >
        <textarea placeholder="{{ __('admin.Content') }}" class="form-control @error('content') is-invalid @enderror" name="content" rows="5"></textarea>
        @error('content')
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


