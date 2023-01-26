@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Preservasi</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/preservasi" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" name="nama_kegiatan" required value="{{ old('nama_kegiatan') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="target" class="form-label">Target</label>
            <input type="integer" class="form-control @error('target') is-invalid @enderror" id="target" name="target" required value="{{ old('target') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kontrak" class="form-label">Kontrak</label>
            <input type="integer" class="form-control @error('kontrak') is-invalid @enderror" id="kontrak" name="kontrak" required value="{{ old('kontrak') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" name="nama_perusahaan" required value="{{ old('nama_perusahaan') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="konsultan_pengawas" class="form-label">Konsultan Pengawas</label>
            <input type="text" class="form-control @error('konsultan_pengawas') is-invalid @enderror" id="konsultan_pengawas" name="konsultan_pengawas" required value="{{ old('konsultan_pengawas') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_kontrak" class="form-label">Tanggal Kontrak</label>
            <input type="date" class="form-control @error('tanggal_kontrak') is-invalid @enderror" id="tanggal_kontrak" name="tanggal_kontrak" required value="{{ old('tanggal_kontrak') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pelaksanaan" class="form-label">Pelaksanaan</label>
            <input type="integer" class="form-control @error('pelaksanaan') is-invalid @enderror" id="pelaksanaan" name="pelaksanaan" required value="{{ old('pelaksanaan') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pemberian_kesempatan" class="form-label">Pemberian Kesempatan</label>
            <input type="integer" class="form-control @error('pemberian_kesempatan') is-invalid @enderror" id="pemberian_kesempatan" name="pemberian_kesempatan" required value="{{ old('pemberian_kesempatan') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_akhir_kontrak" class="form-label">Tanggal Akhir Kontrak</label>
            <input type="date" class="form-control @error('tanggal_akhir_kontrak') is-invalid @enderror" id="tanggal_akhir_kontrak" name="tanggal_akhir_kontrak" required value="{{ old('tanggal_akhir_kontrak') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keuangan_rp" class="form-label">Keuangan (Rp)</label>
            <input type="integer" class="form-control @error('keuangan_rp') is-invalid @enderror" id="keuangan_rp" name="keuangan_rp" required value="{{ old('keuangan_rp') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keuangan_persen" class="form-label">Keuangan (%)</label>
            <input type="integer" class="form-control @error('keuangan_persen') is-invalid @enderror" id="keuangan_persen" name="keuangan_persen" required value="{{ old('keuangan_persen') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fisik_rencana" class="form-label">Fisik Rencana</label>
            <input type="integer" class="form-control @error('fisik_rencana') is-invalid @enderror" id="fisik_rencana" name="fisik_rencana" required value="{{ old('fisik_rencana') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fisik_realisasi" class="form-label">Fisik Realisasi</label>
            <input type="integer" class="form-control @error('fisik_realisasi') is-invalid @enderror" id="fisik_realisasi" name="fisik_realisasi" required value="{{ old('fisik_realisasi') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fisik_deviasi" class="form-label">Fisik deviasi</label>
            <input type="integer" class="form-control @error('fisik_deviasi') is-invalid @enderror" id="fisik_deviasi" name="fisik_deviasi" required value="{{ old('fisik_deviasi') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Create Post</button>
    </form>
    </div>
@endsection