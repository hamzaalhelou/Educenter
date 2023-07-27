@extends('admin.app')

@section('title','Dashboard')
@section('titlegage','Courses')
@section('content')
<div class="text-right mb-4 m-7">
<a class="btn btn-primary float-end" href="{{ route('admin.courses.index') }}">All Courses </a>
</div>
<form action="{{ route('admin.courses.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row align-items-center mb-3 m-3">
    <label class="col-md-1 mb-0"><b>Data</b></label>
    <div class="col-md-6" >
        <input type="date" class="form-control" name="date">
    </div>
    </div>
    <div class="row align-items-center mb-3 m-3">
        <label class="col-md-1 mb-0"><b>Title</b></label>
        <div class="col-md-6" >
            <input type="text" class="form-control" name="title">
        </div>
        </div>
    <div class="row align-items-center mb-3 m-3">
            <label class="col-md-1 mb-0"><b>Image</b></label>
            <div class="col-md-6">
                <input type="file" class="form-control" name="image">
            </div>
            </div>
     <div class="row align-items-center mb-3 m-3">
                <label class="col-md-1 mb-0"><b>Category</b></label>
                <div class="col-md-6" >
                    <input type="text" class="form-control" name="category">
                </div>
                </div>
    <div class="row align-items-center mb-3 m-3">
                    <label class="col-md-1 mb-0"><b>field</b></label>
                    <div class="col-md-6" >
                        <input type="text" class="form-control" name="field">
                    </div>
                    </div>
    <div class="row align-items-center mb-3 m-3">
                        <label class="col-md-1 mb-0"><b>Price</b></label>
                        <div class="col-md-6" >
                            <input type="number" class="form-control" name="price">
                        </div>
                        </div>
    <div class="row align-items-center mb-3 m-3">
                            <label class="col-md-1 mb-0"><b>Duration</b></label>
                            <div class="col-md-6" >
                                <input type="text" class="form-control" name="duration">
                            </div>
                        </div>
                                <div class="row align-items-center mb-3 m-3">
                                    <label class="col-md-1 mb-0" ><b>Content</b></label>
                                    <div class="col-md-6" >
                                        <textarea placeholder="Content" class="form-control" name="content" rows="5"></textarea>
                                    </div>

                                </div>

    <div class="row align-items-center mb-3 m-3">
        <label class="col-md-1 mb-0"><b>Teacher</b></label>
        <div class="col-md-6">
            <select class="form-control" name="teacher_id">
                @foreach ($teachers as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
            <button class="btn btn-success m-3"><i class="fas fa-save"></i> Save</button>
            <button type="button" onclick="history.back()" class="btn btn-secondary"><i class="fas fa-ban"></i> Cancel</button>
    </form>
@stop
