@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<!-- Content Row -->
<div class="row">

  <!-- Jumlah Dokter Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                          Dokter</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['Dokter'] }} Orang</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
  

  <!-- Apoteker Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Apoteker</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['Apoteker'] }} Orang</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
      
  </div>

  <!-- Apoteker Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Tenaga Kesehatan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['Nakes'] }} Orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

  <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Administrator</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data['Admin'] }} Orang</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Content Row -->

<div class="row">

  <!-- Area Chart -->
  <div class="col-xl-12 col-lg-11">
      <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div
              class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-success">Jumlah Pasien Berobat (2022)</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">Stok Obat Menipis (Kurang Dari 10)</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                        <thead style="color: white">
                            <tr class="bg-danger">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Sisa Stok</th>
                            </tr>
                        </thead>
                       <tbody>
                           @if (count($obat)==0)
                               <tr>
                                   <td colspan=3 align="center">Tidak Ada Data Obat</td>
                               </tr>
                           @endif
                           @php
                               $a=0;
                           @endphp
                           @foreach ($obat as $o)
                               <tr>
                                   <td>{{ ++$a; }}</td>
                                   <td>{{ $o->nama }}</td>
                                   <td>{{ $o->stok }}</td>
                               </tr>
                           @endforeach               
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">Inventaris Rusak</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                        <thead style="color: white">
                            <tr class="bg-warning">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                       <tbody>
                           @if (count($inventaris)==0)
                               <tr>
                                   <td colspan=3 align="center">Tidak Ada Data Inventaris Rusak</td>
                               </tr>
                           @endif
                           @php
                               $a=0;
                           @endphp
                           @foreach ($inventaris as $i)
                               <tr>
                                   <td>{{ ++$a; }}</td>
                                   <td>{{ $i->nama }}</td>
                                   <td>{{ $i->keterangan }}</td>
                               </tr>
                           @endforeach               
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
