@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle mt-4">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard" class="text-decoration-none">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- User Card -->
            <div class="col-xxl-4 col-md-3 mb-3">
                <a href="/dashboard/user" class="text-decoration-none">
                  <div class="card info-card user-card">

                    <div class="card-body">
                      <h5 class="card-title">User</h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                          <h6>{{ $jumlah_user }}</h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </a>
              </div><!-- End User Card -->

            <!-- Reservasi Card -->
            <div class="col-xxl-4 col-md-3 mb-3">
              <a href="/dashboard/preservasi" class="text-decoration-none">
                <div class="card info-card reservasi-card">

                  <div class="card-body">
                    <h5 class="card-title">Preservasi</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-archive"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $jumlah_preservasi }}</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div><!-- End Reservasi Card -->

            <!-- Pembangunan Card -->
            <div class="col-xxl-4 col-md-3 mb-3" >
              <a href="/dashboard/pembangunan" class="text-decoration-none">
                <div class="card info-card pembangunan-card">

                  <div class="card-body">
                    <h5 class="card-title">Pembangunan</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-archive"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $jumlah_pembangunan }}</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div><!-- End Pembangunan Card -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
@endsection