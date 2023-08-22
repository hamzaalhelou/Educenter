@extends('admin.app')

@section('title',__('admin.Settings'))
@section('title2',__('admin.Account'))
@section('titlegage',__('admin.Settings'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Settings') }}</h1>
    <a href="#"></a>
</div>
<hr>
<form action="{{ route('admin.settings_data') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Logo') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="file" class="form-control @error('logo') is-invalid @enderror"  name="logo">
            @error('logo')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        </div>
    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Image Features') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="file" class="form-control @error('image_feature') is-invalid @enderror" name="image_feature">
            @error('image_feature')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Facebook') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="url" placeholder="Link Facebook" class="form-control @error('fb_link') is-invalid @enderror" value="{{ settings('fb_link') }}"  name="fb_link">
            @error('fb_link')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Twitter') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="url" placeholder="Link Twitter" class="form-control @error('tw_link') is-invalid @enderror" value="{{ settings('tw_link') }}" name="tw_link">
            @error('tw_link')
            <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Instagram') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="url" placeholder="Link Instagram" class="form-control @error('in_link') is-invalid @enderror" value="{{ settings('in_link') }}" name="in_link">
            @error('in_link')
            <small class="invalid-feedback">{{ $message }}</small>
                @enderror
        </div>
        </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Link Gamil') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="text" placeholder="Link Gamil" class="form-control @error('gm_link') is-invalid @enderror" value="{{ settings('gm_link') }}" name="gm_link">
            @error('gm_link')
            <small class="invalid-feedback">{{ $message }}</small>
                @enderror
        </div>
        </div>

<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Addres') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Addres') }}" class="form-control @error('address') is-invalid @enderror" value="{{ settings('address') }}" name="address">
        @error('address')
        <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>

    <div class="row align-items-center mb-3 m-8">
        <label class="col-md-1 mb-0 required"><b>{{ __('admin.Phone') }}</b></label>
        <div class="col-md-6 ms-20" >
            <input type="tel" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" value="{{ settings('phone') }}" name="phone">
            @error('phone')
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
    @section('scripts')
    <script>
      @if (session('success'))
      Swal.fire({
        icon: 'success',
        title: "{{ session('success') }}"
      })
      @endif
    </script>
      @endsection

@stop


