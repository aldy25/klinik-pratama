@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Cetak Laporan</h1>
</div>
<!-- Content Row -->

<div class="row">

  <!-- Jumlah Dokter Card Example -->
  <div class="col-2 mb-4">
      <div class="card border-danger shadow h-100 py-2 bg-danger">
        <a href="/laporan/cetak/pasien" target="_blank" class="text-decoration-none">  
        <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                          Cetak Data Pasien
                      </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user-injured fa-2x text-light"></i>
                  </div>
              </div>
        </div>
        </a>
      </div>
  </div>
  <div class="col-2 mb-4">
    <div class="card border-primary shadow h-100 py-2 bg-primary">
      <a href="/laporan/cetak/dokter" target="_blank" class="text-decoration-none">  
      <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                        Cetak Data Dokter
                    </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user-md fa-2x text-light"></i>
                </div>
            </div>
      </div>
      </a>
    </div>
</div>
<div class="col-2 mb-4">
  <div class="card border-success shadow h-100 py-2 bg-success">
    <a href="/laporan/cetak/apoteker" target="_blank" class="text-decoration-none">  
    <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                      Cetak Data Apoteker
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user-nurse fa-2x text-light"></i>
              </div>
          </div>
    </div>
    </a>
  </div>
</div>
<div class="col-2 mb-4">
  <div class="card border-danger shadow h-100 py-2 bg-danger">
    <a href="/laporan/cetak/admin" target="_blank" class="text-decoration-none">  
    <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                      Cetak Data Admin
                  </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users-cog fa-2x text-light"></i>
              </div>
          </div>
    </div>
    </a>
  </div>
</div>

<div class="col-2 mb-4">
  <div class="card border-primary shadow h-100 py-2 bg-primary">
    <a href="/laporan/cetak/nakes" target="_blank" class="text-decoration-none">  
    <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                      Cetak Data Tenaga Kesehatan
                  </div>
              </div>
              <div class="col-auto">
                  <i class="fas fa-users fa-2x text-light"></i>
              </div>
          </div>
    </div>
    </a>
  </div>
</div>



</div>
<!-- Content Row -->
<div class="row">
  <div class="col-2 mb-4">
    <div class="card border-success shadow h-100 py-2 bg-success">
  <a href="/laporan/cetak/obat-habis" target="_blank" class="text-decoration-none">  
      <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                        Cetak Data Obat Habis
                    </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-capsules fa-2x text-light"></i>
                </div>
            </div>
      </div>
      </a>
    </div>
  </div>
  <div class="col-2 mb-4">
    <div class="card border-danger shadow h-100 py-2 bg-danger">
      <a href="/laporan/cetak/inventaris-rusak" target="_blank" class="text-decoration-none">  
      <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                        Cetak Data Inventaris Rusak
                    </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-cash-register fa-2x text-light"></i>
                </div>
            </div>
      </div>
      </a>
    </div>
  </div>
  
  <div class="col-2 mb-4">
    <a href="/laporan/cetak/transaksi" class="text-decoration-none">
    <div class="card border-info bg-info  shadow h-100 py-2">
        
      <div class="card-body ">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-light  text-uppercase mb-1">
                        Cetak Data Transaksi Pengobatan
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-light"></i>
                </div>
            </div>
      </div>

    
    
    </div>
  </a>
  </div>
</div>
@endsection
