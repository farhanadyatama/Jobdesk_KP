@extends('dashboard.layouts.main')

@section('container')
<div class="col-12 col-sm-8 col-md-7 mt-3 mb-3">
    <div class="card">
      <div class="card-header">
        <h4>Data Pembangunan</h4>
      </div>
      <div class="card-body">
        <div>
            <p><b>Tanggal :</b><br/>
                <span class="text-success">{{ $pembangunan->tanggal }}<span>
            </p>
        </div>

        <div>
            <p><b>Nama Kegiatan :</b><br/>
                {{ $pembangunan->nama_kegiatan }} 	                
            </p>
        </div>

        <div>
            <p><b>Target :</b><br/>
                {{ $pembangunan->target }} Km
            </p>
        </div>

        <div>
            <p><b>Kontrak :</b><br/>
                {{ $pembangunan->kontrak }}               
            </p>
        </div>

        <div>
            <p><b>Nama Perusahaan :</b><br/>
                {{ $pembangunan->nama_perusahaan }}                
            </p>
        </div>
        
        <div>
            <p><b>Konsultan Pengawas :</b><br/>
                {{ $pembangunan->konsultan_pengawas }}             
            </p>
        </div>

        <div>
            <p><b>Tanggal Kontrak :</b><br/>
                <span class="text-success">{{ $pembangunan->tanggal_kontrak }}<span>
            </p>
        </div>

        <div>
            <p><b>Pelaksanaan :</b><br/>
                {{ $pembangunan->pelaksanaan }}                
            </p>
        </div>
        
        <div>
            <p><b>Pemberian Kesempatan :</b><br/>
                {{ $pembangunan->pemberian_kesempatan }}                
            </p>
        </div>

        <div>
            <p><b>Tanggal Akhir Kontrak :</b><br/>{{ $pembangunan->tanggal_akhir_kontrak }}</p>
        </div>

        <div>
            <p><b>Keuangan (Rp) :</b><br/>{{ $pembangunan->keuangan_rp }},00-</p>
        </div>

        <div>
            <p><b>Keuangan (%) :</b><br/>{{ $pembangunan->keuangan_persen }} %</p>
        </div>

        <div>
            <p><b>Fisik (Rencana) :</b><br/>{{ $pembangunan->fisik_rencana }}</p>
        </div>

        <div>
            <p><b>Fisik (Realisasi) :</b><br/>{{ $pembangunan->fisik_realisasi }}</p>
        </div>
        
        <div>
            <p><b>Fisik (Deviasi) :</b><br/>{{ $pembangunan->fisik_deviasi }}</p>
        </div>

        <div>
            <p><b>Keterangan :</b><br/>{{ $pembangunan->keterangan }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection