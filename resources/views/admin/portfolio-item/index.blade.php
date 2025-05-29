@extends('admin.layouts.master')
@section('title','Portfolio Items')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Portfolio Item</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Portfolio Items</h4>
              <div class="card-header-action">
                <a href="{{route('admin.portfolio-item.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
               
              
<h1 class="text-2xl font-bold mb-4">Posts</h1>
<table class="table-auto w-full border-collapse border border-gray-200">
    <thead>
        <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2">Image</th>
              <th class="border px-4 py-2">Category</th>
            <th class="border px-4 py-2">Created At</th>
            <th class="border px-4 py-2">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->id }}</td>
                <td class="border px-4 py-2">{{ $item->title }}</td>
                <td class="border px-4 py-2">
                  @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                  @else
                    No Image
                  @endif
                </td>
                <td class="border px-4 py-2">
                    @if($item->category)
                        {{ $item->category->name }}
                    @else
                        No Category
                    @endif
                <td class="border px-4 py-2">{{ $item->created_at }}</td>
                <td class="border px-4 py-2">{{ $item->updated_at }}</td>

                <td class="border px-4 py-2">
                    <a href="{{ route('admin.portfolio-item.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.portfolio-item.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                    </form>
            </tr>
        @endforeach
    </tbody>
</table>

        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

{{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
