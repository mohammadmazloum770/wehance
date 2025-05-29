@extends('admin.layouts.master')
@section('title', 'Portfolio Category')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Portfolio Category</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Categories</h4>
              <div class="card-header-action">
              <a href="{{route('admin.category.create')}}" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                  <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td>

                  <td>
                    <a href="{{ route('admin.category.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.category.destroy', $item->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
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
      </div>
    </div>
  </section>
@endsection


