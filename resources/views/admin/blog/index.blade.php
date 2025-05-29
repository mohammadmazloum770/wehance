@extends('admin.layouts.master')
@section('title','All Blogs')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Blog</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Blogs</h4>
              <div class="card-header-action">
                <a href="{{route('admin.blog.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
           

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item => $blog)
                    <tr>
                      <td>{{ $blog->id }}</td>
                      <td>
                        @if($blog->image)
                          <img src="{{ asset("uploads/{$blog->image}") }}" alt="" style="width: 100px; height: 100px; object-fit: cover;">
                        @else
                          N/A
                        @endif
                      </td>
                      <td>{{ optional($blog->category)->name ?? 'N/A' }}</td>
                      <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                      <td>
                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                      </td>
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

