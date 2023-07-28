@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Features')
@section('content')
<div class="text-right mb-4 m-4">
    <a class="btn btn-primary float-end" href="{{ route('admin.features.create') }}">Add New Feature</a>
</div>

@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
<hr>
<table class="table table-bordered m-2 ">
    <tr class="table-primary">
        <th>ID</th>
        <th>Icon</th>
        <th>Title</th>
        <th>content</th>
        <th>Actions</th>
    </tr>
    @foreach ($features as $feature)
        <tr>
            <td>{{ $feature->id }}</td>
            <td>{{ $feature->icon }}</td>
            <td>{{ $feature->title }}</td>
            <td>{{ $feature->content }}</td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.features.edit', $feature->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.features.destroy', $feature->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $features->links() }}
@stop


