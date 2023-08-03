@extends('admin.app')

@section('title', 'Account')
@section('title2','Account')
@section('titlegage','Account Overview
')
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">Profile Details</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.teacher.index') }}">Edit Profile</a>
</div>
<hr>
<form>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>Full Name</b></label>
    <div class="col-md-6 ms-20 " >
        <input type="text" class="form-control" name="full name">
    </div>
    </div>
    </form>

@stop


