@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Journalists'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Journalists') }}</h1>
        <a class="btn btn-primary me-17" href="{{ route('admin.journalists.create') }}">{{ __('admin.Add New Journalist') }}</a>
</div>
@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary ">
        <th>{{ __('admin.ID') }}</th>
        <th>{{ __('admin.Date') }}</th>
        <th>{{ __('admin.Writer') }}</th>
        <th>{{ __('admin.Title') }}</th>
        <th>{{ __('admin.Content') }}</th>
        <th>{{ __('admin.Actions') }}</th>
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
                    <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $journalists->links() }}
@stop


