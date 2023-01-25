@extends('dashboard.layouts.main')

@section('container')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Beranda</a></li>
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
            <div class="col-xxl-4 col-md-3">
                <a href="/dashboard/user">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">User</h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6>1</h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </a>
              </div><!-- End User Card -->

            <!-- Reservasi Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="/dashboard/preservasi">
                <div class="card info-card revenue-card">

                  <div class="card-body">
                    <h5 class="card-title">Preservasi</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>2</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div><!-- End Reservasi Card -->

            <!-- Pembangunan Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="/dashboard/pembangunan">
                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Pembangunan</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>3</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div><!-- End Pembangunan Card -->

            <!-- Dokumen & Data -->
            <div class="col-xxl-4 col-md-3 mt-4">
              <a href="/dashboard/pembangunan">
                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Dokumen & Data</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>4</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </a>
            </div><!-- End Dokumen & Data -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
@endsection