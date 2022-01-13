@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a href="/dashboard/user/create" class="btn btn-primary">Create New User</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action </th>
        </tr>
      </thead>
      <tbody>
          @foreach ($user as $users)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $users->slug }}" class="badge bg-info"> <i class="bi bi-eye"></i></a>
                <a href="/dashboard/categories/{{ $users->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/user/{{ $users->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Anda Yakin Menghapus nya')"><i class="bi bi-trash"></i></button>
                </form>
                
            </td>
          </tr>
          @endforeach
   
      </tbody>
    </table>
  </div>
    
@endsection

