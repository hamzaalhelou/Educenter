@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Courses'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Edit Course') }}</h1>
<a class="btn btn-primary me-17" href="{{ route('admin.courses.index') }}">{{ __('admin.All Courses') }}</a>
</div>
<form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('put')
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.ID') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" class="form-control" disabled value="{{$course->id}}" name="id">
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Date') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="date" class="form-control @error('date') is-invalid @enderror" value="{{$course->date}}" name="date">
        @error('date')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Title') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Title') }}" class="form-control  @error('title') is-invalid @enderror" value="{{$course->title}}" name="title">
        @error('title')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Image') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
        @error('image')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
        <img width="100" src="{{ asset('uploads/images/'.$course->image) }}" alt="">
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Category') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Category') }}" class="form-control @error('category') is-invalid @enderror" value="{{$course->category}}"  name="category">
        @error('category')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.field') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.field') }}" class="form-control @error('field') is-invalid @enderror" value="{{$course->field}}" name="field">
        @error('field')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Price') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="number" placeholder="{{ __('admin.Price') }}" class="form-control @error('price') is-invalid @enderror" value="{{$course->price}}" name="price">
        @error('price')
        <small class="invalid-feedback">{{ $message }}</small>
         @enderror
    </div>
    </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Duration') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Duration') }}"  class="form-control @error('duration') is-invalid @enderror" value="{{$course->duration}}" name="duration">
     @error('duration')
     <small class="invalid-feedback">{{ $message }}</small>
     @enderror

    </div>
</div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required" ><b>{{ __('admin.Content') }}</b></label>
    <div class="col-md-6 ms-20" >
        <textarea placeholder="{{ __('admin.Content') }}" class="form-control @error('content') is-invalid @enderror"name="content" rows="5">{{ $course->content }}</textarea>
        @error('content')
        <small class="invalid-feedback">{{ $message }}</small>
         @enderror
    </div>

</div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Teacher') }}</b></label>
    <div class="col-md-6 ms-20">
        <select class="form-control" name="teacher_id">
            @foreach ($teachers as $item)
                <option @selected($item->id == $course->teacher_id) value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<hr class="mt-10">
<div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
    <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban "></i>{{ __('admin.Cancel') }}</button>
    <button class="btn btn-success ms-3"> <i class="fas fa-save"></i>{{ __('admin.Save') }}</button>
</div>

</form>

@stop


