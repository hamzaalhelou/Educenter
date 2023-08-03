@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Journalists'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Add New Journalist') }}</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.journalists.index') }}">{{ __('admin.All Journalists') }}</a>
</div>
<form action="{{ route('admin.journalists.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<hr>
<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Date') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="date" placeholder="{{ __('admin.Date') }}" class="form-control @error('date') is-invalid @enderror" name="date">
        @error('date')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Writer') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Writer') }}" class="form-control @error('writer') is-invalid @enderror" name="writer">
        @error('writer')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Title') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Title') }}" class="form-control @error('title') is-invalid @enderror" name="title">
        @error('title')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required " ><b>{{ __('admin.Content') }}</b></label>
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


