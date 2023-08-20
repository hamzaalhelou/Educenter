@extends('admin.app')

@section('title',__('admin.Roles'))
@section('title2',__('admin.Roles'))
@section('titlegage',__('admin.Roles'))
@section('titlegage',
__('admin.Roles'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Add New Role') }}</h1>
    <a class="btn btn-primary me-17 " href="{{ route('admin.roles.index') }}">{{ __('admin.All Roles') }}</a>
</div>

<form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data" class="container">
@csrf
<hr>
<div class="row align-items-center mb-3 m-8">
    <label class="col-md-1 mb-0 required"><b>{{ __('admin.Name') }}</b></label>
    <div class="col-md-6 ms-20" >
        <input type="text" placeholder="{{ __('admin.Name') }}" class="form-control @error('name') is-invalid @enderror " name="name">
        @error('name')
            <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <div class="row align-items-center mb-3 m-8">
        <h4 class="fw-bold m-0 required ">Permission</h4>

<label class="form-check form-check-custom form-check-solid align-items-start mb-1 m-4"><input class="form-check-input me-3"  type="checkbox" id="check_all" /><b> All</b></label><br>
@foreach ($permissions as $p)
<label class="form-check form-check-custom form-check-solid align-items-start mb-1 m-4"> <input class="form-check-input me-3" type="checkbox" value="{{ $p->id }}" name="permissions[]"><b>{{ $p->name }}</b></label> <br>
@endforeach
</div>
    <hr class="mt-10">
    <div class="card-footer d-flex justify-content-end py-6 px-9 m-5">
         <button type="button" onclick="history.back()" class="btn btn-secondary"> <i class="fas fa-ban"></i>{{ __('admin.Cancel') }}</button>
         <button class="btn btn-success ms-3"> <i class="fas fa-save"></i>{{ __('admin.Save') }}</button>
    </div>

</form>

@stop

@section('scripts')

<script>
    $('#check_all').change(function() {
        $('input[type=checkbox]').attr('checked', this.checked )
    })
</script>

@stop

