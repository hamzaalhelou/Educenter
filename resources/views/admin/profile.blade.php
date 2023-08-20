@extends('admin.app')

@section('title',__('admin.Account'))
@section('title2',__('admin.Account'))
@section('titlegage',
__('admin.Account Overview'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Profile Details') }}</h1>
</div>
<form action="{{ route('admin.profile.update') }}" method="POST">
@csrf
@method('PUT')
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Name') }}</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" name="name">
        @error('name')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Email') }}</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" name="email">
        @error('email')
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


