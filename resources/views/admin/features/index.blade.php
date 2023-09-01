@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Features'))
@section('content')
<div class="card mb-3 m-3" >
    <div class="card-body">
<div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 text-gray-800 mb-0">{{ __('admin.Features') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.features.create') }}">{{ __('admin.Add New Feature') }}</a>
</div>
</div>
<div class="card-body border-top">
<table class="table table-bordered m-2 ">
    <tr class="table-primary">
        <th>{{ __('admin.ID') }}</th>
        <th>{{ __('admin.Icon') }}</th>
        <th>{{ __('admin.Title') }}</th>
        <th>{{ __('admin.Content') }}</th>
        <th>{{ __('admin.Actions') }}</th>
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
                    <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</div>
</div>
{{ $features->links() }}
@section('scripts')
<script>
  @if (session('msg'))
  Swal.fire({
    icon: "{{ session('type') }}",
    title: "{{ session('msg') }}"
  })
  @endif
</script>
  @endsection
@stop


