@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Cetak Data Transaksi</h1>
</div>
<!-- Content Row -->
<div class="row">
  <div class="col-12">
      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Cetak Data Berdasakan Bulan</h6>
          </div>
          <form method="POST" action="/laporan/cetak/transaksi" target="_blank">
            @csrf
            <div class="row">
              <div class="col-6">
                <div class="form-group mx-3">
                  <label for="bulan" class="d-flex">Bulan</label>
                  <select required class="form-control" name="bulan" id="bulan">
                    <option value="">Pilih Bulan</option>
                    <option value="Semua">Semua</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-6">
                    <div class="form-group mx-3">
                      <label for="tahun">Pilih Tahun</label>
                      <select required class="form-control" id="tahun" name="tahun">
                        <option value="">Pilih Tahun</option>
                        <option value="2022">2022</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group mx-3">
                    <button type="submit" class="btn btn-success">Cetak</button>
                  </div>
                </div>
              </div>     
          </form>
  </div>
</div>
</div>
@endsection
