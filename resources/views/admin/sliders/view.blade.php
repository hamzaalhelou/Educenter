@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Sliders'))
@section('content')
<div class="card mb-3 m-3" >
    <div class="card-body">
<div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 text-gray-800 mb-0">{{ __('admin.View Slider') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.sliders.index') }}">{{ __('admin.All Sliders') }}</a>
</div>
</div>
<form action="{{ route('admin.sliders.show', $slider->id) }}">
@csrf

<div class="card-body border-top">
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Title') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" class="form-control" value="{{$slider->title}}" name="title" readonly>

    </div>
    </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required" ><b>{{ __('admin.Content') }}</b></label>
        <div class="col-md-6 ms-20" >
            <textarea readonly class="form-control" name="content" rows="5">{{ $slider->content }} </textarea>
        </div>

    </div>
<div class="row align-items-bottom mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Image') }}</b></label>
    <div class="col-md-6 ms-20" >
        <img width="150" src="{{ asset('uploads/images/'.$slider->image) }}" alt="">
    </div>
    </div>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required "><b>{{ __('admin.Apply New') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" class="form-control" value="{{ $slider->btn1_link }}" name="btn1_link" readonly>
    </div>
    </div>
</div>
   </form>

</div>


@stop


