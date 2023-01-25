@extends('dashboard.layouts.main')

@section('container')
<div class="col-12 col-sm-8 col-md-7">
    <div class="card">
      <div class="card-header">
        <h4>Data Preservasi</h4>
      </div>
      <div class="card-body">
        <div>
            <p><b>Tanggal :</b><br/>
                <span class="text-success">{{ $reservasi->tanggal }}<span>
            </p>
        </div>

        <div>
            <p><b>Nama Kegiatan :</b><br/>
                {{ $reservasi->nama_kegiatan }} 	                
            </p>
        </div>

        <div>
            <p><b>Target :</b><br/>
                {{ $reservasi->target }} Km
            </p>
        </div>

        <div>
            <p><b>Kontrak :</b><br/>
                {{ $reservasi->kontrak }}               
            </p>
        </div>

        <div>
            <p><b>Nama Perusahaan :</b><br/>
                {{ $reservasi->nama_perusahaan }}                
            </p>
        </div>
        
        <div>
            <p><b>Konsultan Pengawas :</b><br/>
                {{ $reservasi->konsultan_pengawas }}             
            </p>
        </div>

        <div>
            <p><b>Tanggal Kontrak :</b><br/>
                <span class="text-success">{{ $reservasi->tanggal_kontrak }}<span>
            </p>
        </div>

        <div>
            <p><b>Pelaksanaan :</b><br/>
                {{ $reservasi->pelaksanaan }}                
            </p>
        </div>
        
        <div>
            <p><b>Pemberian Kesempatan :</b><br/>
                {{ $reservasi->pemberian_kesempatan }}                
            </p>
        </div>

        <div>
            <p><b>Tanggal Akhir Kontrak :</b><br/>{{ $reservasi->tanggal_akhir_kontrak }}</p>
        </div>

        <div>
            <p><b>Keuangan (Rp) :</b><br/>{{ $reservasi->keuangan_rp }},00-</p>
        </div>

        <div>
            <p><b>Keuangan (%) :</b><br/>{{ $reservasi->keuangan_persen }} %</p>
        </div>

        <div>
            <p><b>Fisik (Rencana) :</b><br/>{{ $reservasi->fisik_rencana }}</p>
        </div>

        <div>
            <p><b>Fisik (Realisasi) :</b><br/>{{ $reservasi->fisik_realisasi }}</p>
        </div>
        
        <div>
            <p><b>Fisik (Deviasi) :</b><br/>{{ $reservasi->fisik_deviasi }}</p>
        </div>

        <div>
            <p><b>Keterangan :</b><br/>{{ $reservasi->keterangan }}</p>
        </div>
      </div>
      <div class="card-footer text-center bg-whitesmoke">
        <a href="#" class="btn btn-icon icon-left btn-success" data-toggle="modal" data-target="#newsModal31"><i class="fas fa-image"></i> <span>Ubah Data</span></a>
      </div>
    </div>
  </div>
@endsection