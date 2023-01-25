@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle">
  <h1>Users</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
      <li class="breadcrumb-item active">Users</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm mt-3">
    <thead>
      <tr>
        <th scope="col">NO</th>
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