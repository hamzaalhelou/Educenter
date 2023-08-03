@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Events'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Events') }}</h1>
        <a class="btn btn-primary me-17" href="{{ route('admin.events.create') }}">{{ __('admin.Add New Event') }}</a>
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
        <th>{{ __('admin.Image') }}</th>
        <th>{{ __('admin.Addres') }}</th>
        <th>{{ __('admin.Content') }}</th>
        <th>{{ __('admin.Actions') }}</th>
    </tr>
    @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->date }}</td>
            <td><img width="100" src="{{ asset('uploads/images/'.$event->image) }}" alt=""></td>
            <td>{{ $event->address }}</td>
            <td>{{ $event->content }}</td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.events.edit', $event->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $events->links() }}
@stop


