@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Layanan Pengobatan</h1>
</div>
<!-- Content Row -->
<div class="row">

  <!-- Content Column -->
  <div class="col-12 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Rekam Medis Pasien</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Nama</th>
                          <th>Keluhan</th>
                          <th>Diagnosa</th>
                          <th>Tindakan</th>
                      </tr>
                  </thead>
                 <tbody>
                  @php
                      $a=0;
                  @endphp
                  @foreach ($rekam_medis as $rm)
                    <tr>
                      <td>{{ ++$a }}</td>
                      @php
                          $newtime = strtotime($rm->created_at);
                          $data = date('M d, Y',$newtime);
                      @endphp   
                      <td>{{ $data }}</td>
                      <td>{{ $rm->pasien->nama }}</td>
                      <td>{{ $rm->keluhan }}</td>
                      <td>{{ $rm->diagnosa }}</td>
                      <td>{{ $rm->tindakan }}</td>
                    </tr>
                  @endforeach               
                 </tbody>
              </table>
            </div>
          </div>
          
      </div>
  </div>
</div>


<div class="row">

  <!-- Content Column -->
  <div class="col-12 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Pengobatan dan Tindakan</h6>
          </div>
          @if (session()->has('Sukses'))
          <div class="col-12 mt-2">
              <div class="alert alert-primary" role="alert">
                      {{ session('Sukses') }}
              </div>
          </div>   
          @endif
              <form method="POST" action="/pemeriksaan/update/{{ $diagnosa->id }}" class="my-3 mx-3">
                @csrf
                <div class="form-group">
                  <label for="nama" class="d-flex">Nama Pasien</label>
                  <input type="text" class="form-control" disabled value="{{ $diagnosa->pasien->nama }}">
                </div>
                <div class="form-group">
                  <label for="keluhan" class="d-flex">Keluhan</label>
                  <textarea class="form-control" rows="3" disabled>{{ $diagnosa->keluhan }}</textarea>
                </div>
                <div class="form-group">
                  <label for="diagnosa">Diagnosa</label>
                  <textarea class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa" rows="3"></textarea>
                  @error('diagnosa')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="tindakan">Tindakan</label>
                  <textarea class="form-control @error('tindakan') is-invalid @enderror" id="tindakan" name="tindakan" rows="3"></textarea>
                  @error('tindakan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <input type="hidden" value="{{ $diagnosa->dokter_id }}" id="dokter_id" name="dokter_id">
                <input type="hidden" value="{{ $diagnosa->pasien_id }}" id="pasien_id" name="pasien_id">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Resep Obat</h6>
                </div>

                <div class="form-group mx3">                  
                  <table class="table table-bordered" id="dynamicAddRemove">
                    <tr>
                        <th>Obat</th>
                        <th>Penggunaan</th>
                        <th>Jumlah Obat</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td><select class="selectpicker " data-live-search="true" name="resep[0][obat]" id="obat_id">
                          <option value="">Pilih Obat</option>
                          @foreach ($obat as $o)
                            <option value="{{ $o->id }}">{{ $o->nama }}</option>
                          @endforeach
                        </select>
                        </td>
                        <td><input type="text" name="resep[0][penggunaan]" placeholder="Contoh : 3x1" class="form-control" />
                        </td>
                        <td><input type="text" name="resep[0][jumlah]" class="form-control" />
                        </td>
                        <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-success">Tambah Obat</button></td>
                    </tr>
                  </table>

                  
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </form>
      </div>
  </div>
</div>
@endsection
