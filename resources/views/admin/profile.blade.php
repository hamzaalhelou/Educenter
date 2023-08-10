@extends('admin.app')

@section('title', 'Account')
@section('title2','Account')
@section('titlegage','Account Overview
')
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">Profile Details</h1>
</div>
<hr>
<form>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Name</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="text" class="form-control" name="name">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Phone</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="tel" class="form-control" name="phone">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Email</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="email" class="form-control" name="email">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Country</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="text" class="form-control" name="country">
    </div>
    </div>

<hr class="mt-10">
<div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
<button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i>{{ __('admin.Cancel') }}</button>
<button class="btn btn-success ms-3"> <i class="fas fa-save"></i>{{ __('admin.Save') }}</button>
</div>
    </form>

@stop


