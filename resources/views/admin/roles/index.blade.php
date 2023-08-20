@extends('admin.app')

@section('title',__('admin.Roles'))
@section('title2',__('admin.Roles'))
@section('titlegage',__('admin.Roles') )
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Roles') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.roles.create') }}">{{ __('admin.Add New Role') }}</a>
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
        <th>{{  __('admin.Name')  }} </th>
        <th>{{ __('admin.Actions') }}</th>
    </tr>
    @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <form class="d-inline" method="POST" action="{{ route('admin.roles.destroy', $role->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $roles->links() }}
@stop


