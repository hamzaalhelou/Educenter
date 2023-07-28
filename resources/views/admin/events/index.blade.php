@extends('admin.app')

@section('title', 'Dahsboard')
@section('titlegage','Events')
@section('content')
    <div class="text-right mb-4 m-4">
        <a class="btn btn-primary float-end" href="{{ route('admin.events.create') }}">Add New Event</a>
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
        <th>Image</th>
        <th>Addres</th>
        <th>Content</th>
        <th>Actions</th>
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
                    <button onclick="return confirm('Are you sure?!')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $events->links() }}
@stop


