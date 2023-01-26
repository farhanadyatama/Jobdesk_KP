@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle ml-3 mt-4">
    <h1>Pembangunan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Beranda</a></li>
        <li class="breadcrumb-item active">Pembangunan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/pembangunan/create" class="btn btn-primary mb-3">Tambah data pembangunan</a>
    <table class="table table-hover table-sm content-table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama Kegiatan</th>
          <th scope="col">Nama Perusahaan</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pembangunans as $pembangunan)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pembangunan->tanggal }}</td>
            <td>{{ $pembangunan->nama_kegiatan }}</td>
            <td>{{ $pembangunan->nama_perusahaan }}</td>
            <td>
              <a href="/dashboard/pembangunan/{{ $pembangunan->id }}" class="btn btn-info bi bi-eye-fill"></a>
              <a href="/dashboard/pembangunan/{{ $pembangunan->id }}/edit" class="btn btn-warning bi bi-pencil-square"></a>
              <form action="/dashboard/pembangunan/{{ $pembangunan->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger bi bi-trash3-fill" onclick="return confirm('Yakin ingin menghapus?')"></button>
              </form></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection