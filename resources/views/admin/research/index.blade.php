@extends('admin.app')

@section('title',__('admin.Dashboards'))
@section('titlegage',__('admin.Researchs') )
@section('content')
<div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800 mb-0 ms-9">{{ __('admin.Researchs') }}</h1>
    <a class="btn btn-primary me-17" href="{{ route('admin.research.create') }}">{{ __('admin.Add New Research') }}</a>
</div>
<hr>
<table class="table table-bordered m-2">
    <tr class="table-primary ">
        <th>{{ __('admin.ID') }}</th>
        <th>{{  __('admin.Title')  }} </th>
        <th>{{ __('admin.Content') }}</th>
        <th>{{ __('admin.Image') }}</th>
        <th>{{ __('admin.Actions') }}</th>
    </tr>
    @foreach ($researchs as $research)
        <tr>
            <td>{{ $research->id }}</td>
            <td>{{ $research->title }}</td>
            <td>{{ $research->content }}</td>
            <td><img width="100" src="{{ asset('uploads/images/'.$research->image) }}" alt=""></td>
            <td>
                <a class="btn btn-primary btn-sm m-2" href="{{ route('admin.research.edit', $research->id) }}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" method="POST" action="{{ route('admin.research.destroy', $research->id) }}">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('{{ __('admin.Are you sure?!') }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $researchs->links() }}
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


