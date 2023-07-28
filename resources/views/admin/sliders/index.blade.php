@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Sliders')
@section('content')
    <div class="text-right mb-4 m-4">
        <a class="btn btn-primary float-end" href="{{ route('admin.sliders.create') }}">Add New Slider</a>
    </div>
@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary ">
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Apply New</th>
        <th>Actions</th>
    </tr>
    @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->id }}</td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->content }}</td>
            <td><img width="100" src="{{ asset('uploads/images/'.$slider->image) }}" alt=""></td>
            <td>{{ $slider->btn1_link }}</td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.sliders.edit', $slider->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.sliders.destroy', $slider->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $sliders->links() }}
@stop


