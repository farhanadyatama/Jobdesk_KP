@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle ml-2 mt-4">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Beranda</a></li>
      <li class="breadcrumb-item active">Users</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="table-responsive col-lg-8">
  <table class="table table-hover table-sm mt-3 content-table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
      @endforeach
    </tbody>
  </table>
</div>
@endsection