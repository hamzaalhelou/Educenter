@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Journalist')
@section('content')
    <div class="text-right mb-4 m-4">
        <a class="btn btn-primary float-end" href="{{ route('admin.journalists.create') }}">Add New Journalist</a>
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
        <th>Date</th>
        <th>Writer</th>
        <th>Title</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>
    @foreach ($journalists as $journalist)
        <tr>
            <td>{{ $journalist->id }}</td>
            <td>{{ $journalist->date }}</td>
            <td>{{ $journalist->writer }}</td>
            <td>{{ $journalist->title }}</td>
            <td>{{ $journalist->content }}</td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.journalists.edit', $journalist->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.journalists.destroy', $journalist->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $journalists->links() }}
@stop


