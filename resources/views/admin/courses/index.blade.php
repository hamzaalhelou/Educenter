@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Courses'))
@section('content')
<div class="card mb-3 m-3" >
    <div class="card-body">
<div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 text-gray-800 mb-0">{{ __('admin.Courses') }}</h1>
    <a class="btn btn-primary me-17" href="{{route('admin.courses.create')}}">{{ __('admin.Add New Course') }}</a>
</div>
</div>
<div class="card-body border-top">
<table class="table table-bordered m-2">
    <tr class="table-primary">
        <th>{{ __('admin.ID') }}</th>
        <th>{{ __('admin.Date') }}</th>
        <th>{{ __('admin.Title') }}</th>
        <th>{{ __('admin.Image') }}</th>
        <th>{{ __('admin.Category') }}</th>
        <th>{{ __('admin.field') }}</th>
        <th>{{ __('admin.Price') }}</th>
        <th>{{ __('admin.Duration') }}</th>
        <th>{{ __('admin.Duration Hours') }}</th>
        <th>{{ __('admin.Duration Month') }}</th>
        <th>{{ __('admin.Content') }}</th>
        <th>{{ __('admin.Teacher') }}</th>
        <th>{{ __('admin.Actions') }}</th>
    </tr>
    @foreach ($courses as $course)
    <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->date}}</td>
        <td>{{$course->title}}</td>
        <td><img width="50" src="{{ asset('uploads/images/'.$course->image) }}" alt=""></td>
        <td>{{$course->category}}</td>
        <td>{{$course->field}}</td>
        <td>{{$course->price}}</td>
        <td>{{$course->duration}}</td>
        <td>{{$course->duration_hours}}</td>
        <td>{{$course->duration_month}}</td>
        <td>{{$course->content}}</td>
        <td>{{$course->teacher->name}}</td>
        <td>
            <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.courses.edit',$course->id) }}"><i class="fas fa-edit"></i> </a>
            <form class="d-inline" method="POST" action="{{ route('admin.courses.destroy',$course->id) }}">
            @csrf
           @method('delete')
           <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i> </button>
          </form>
        </td>
    </tr>

    @endforeach
</table>
</div>
</div>
{{ $courses->links() }}
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
