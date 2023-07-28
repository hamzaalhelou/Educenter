@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Teachers')
@section('content')
<div class="text-right mb-4 m-4">
    <a class="btn btn-primary float-end" href="{{ route('admin.teacher.create') }}">Add New Teacher</a>
</div>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Position</th>
        <th>Link Facebook</th>
        <th>Link Instagram</th>
        <th>Link Linkedln</th>
        <th>Link Gamil</th>
        <th>Actions</th>
    </tr>
    @foreach ($teachers as $teacher)
        <tr>
            <td>{{ $teacher->id }}</td>
            <td>{{ $teacher->name }}</td>
            <td><img width="100" src="{{ asset('uploads/images/'.$teacher->image) }}" alt=""></td>
            <td>{{ $teacher->position }}</td>
            <td>{{ $teacher->fb_link }}</td>
            <td>{{ $teacher->in_link }}</td>
            <td>{{ $teacher->ln_link }}</td>
            <td>{{ $teacher->gm_link }}</td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.teacher.edit', $teacher->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.teacher.destroy', $teacher->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $teachers->links() }}
@stop


