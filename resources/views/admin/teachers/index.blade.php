@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Teachers'))
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Teachers') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.teacher.create') }}">{{ __('admin.Add New Teacher') }}</a>
</div>
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary">
        <th>{{ __('admin.ID') }}</th>
        <th>{{ __('admin.Name') }}</th>
        <th>{{ __('admin.Image') }}</th>
        <th>{{ __('admin.Position') }}</th>
        <th>{{ __('admin.Link Facebook') }}</th>
        <th>{{ __('admin.Link Instagram') }}</th>
        <th>{{ __('admin.Link Linkedln') }}</th>
        <th>{{ __('admin.Link Gamil') }}</th>
        <th>{{ __('admin.Actions') }}</th>
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
                    <button onclick="return confirm({{ __('admin.Are you sure?!') }})" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $teachers->links() }}
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


