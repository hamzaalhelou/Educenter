@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Teachers'))
@section('content')
<div class="card mb-3 m-3" >
    <div class="card-body">
<div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 text-gray-800 mb-0">{{ __('admin.Edit Teacher') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.teacher.index') }}">{{ __('admin.All Teachers') }}</a>
</div>
</div>
<form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<div class="card-body border-top">
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0"><b>{{ __('admin.ID') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" class="form-control" disabled value="{{ $teacher->id }}" name="id">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Name') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Name') }}" class="form-control @error('name') is-invalid @enderror" value="{{ $teacher->name }}"  name="name">
        @error('name')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Image') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
        <img width="100" src="{{ asset('uploads/images/'.$teacher->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Position') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Position') }}" class="form-control @error('position') is-invalid @enderror" value="{{ $teacher->position }}" name="position">
        @error('position')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Link Facebook') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="{{ __('admin.Link Facebook') }}" class="form-control @error('fb_link') is-invalid @enderror" value="{{ $teacher->fb_link }}"name="fb_link">
        @error('fb_link')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
<label class="col-md-1 mb-0 required "><b>{{ __('admin.Link Instagram') }}</b></label>
<div class="col-md-6 ms-20" >
    <input type="url" placeholder="{{ __('admin.Link Instagram') }}" class="form-control @error('in_link') is-invalid @enderror" value="{{ $teacher->in_link }}" name="in_link">
    @error('in_link')
    <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
</div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Link Linkedln') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="{{ __('admin.Link Linkedln') }}" class="form-control @error('ln_link') is-invalid @enderror" value="{{ $teacher->ln_link }}" name="ln_link">
        @error('ln_link')
       <small class="invalid-feedback">{{ $message }}</small>
       @enderror
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Link Gamil') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="url" placeholder="{{ __('admin.Link Gamil') }}" class="form-control @error('gm_link') is-invalid @enderror" value="{{ $teacher->gm_link }}" name="gm_link">
        @error('gm_link')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
<div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
    <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i>{{ __('admin.Cancel') }}</button>
    <button class="btn btn-success ms-3"> <i class="fas fa-save"></i>{{ __('admin.Save') }}</button>
</div>
</div>
</form>
</div>


@stop


