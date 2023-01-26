@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle ml-3 mt-4">
      <h1>Preservasi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Beranda</a></li>
          <li class="breadcrumb-item active">Preservasi</li>
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
      <a href="/dashboard/preservasi/create" class="btn btn-primary mb-3">Tambah data preservasi</a>
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
          @foreach ($reservasis as $reservasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $reservasi->tanggal }}</td>
              <td>{{ $reservasi->nama_kegiatan }}</td>
              <td>{{ $reservasi->nama_perusahaan }}</td>
              <td>
                <a href="/dashboard/preservasi/{{ $reservasi->id }}" class="btn btn-info bi bi-eye-fill"></a>
                <a href="/dashboard/preservasi/{{ $reservasi->id }}/edit" class="btn btn-warning bi bi-pencil-square"></a>
                <form action="/dashboard/preservasi/{{ $reservasi->id }}" method="post" class="d-inline">
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