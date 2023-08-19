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
    @if (session()->has('Sukses'))
      <div class="col-12 mt-2">
        <div class="alert alert-primary" role="alert">
          {{ session('Sukses') }}
        </div>
      </div>   
    @endif

      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Pemeriksaan</h6>
          </div>
          <div class="card mx-3 mt-3 border-0">
            <p>Pasien baru ? <a href="/pasien/create" class="text-decoration-none">Klik disini</a> </p>
          </div>
          <form method="POST" action="/transaksi/save">
            @csrf
            <div class="row">
              <div class="col-6">
                <div class="form-group mx-3">
                  <label for="pasien_id" class="d-flex">Pasien</label>
                  <select required class="selectpicker @error('pasien_id') is-invalid @enderror" data-live-search="true" name="pasien_id" id="pasien_id">
                    <option value="">Pilih Pasien</option>
                    @foreach ($pasien as $p)
                    <option value="{{ $p->id }}">{{ $p->no_rm }} | {{ $p->nama }}</option>
                    @endforeach
                  </select>
                  @error('pasien_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mx-3">
                  <label for="dokter_id" class="d-flex">Dokter</label>
                  <select class="selectpicker @error('dokter_id') is-invalid @enderror" data-live-search="true" name="dokter_id" id="dokter_id">
                    <option value="">Pilih Dokter</option>
                    @foreach ($dokter as $d)
                      <option value="{{ $d->id }}">{{ $d->nama }}</option>
                    @endforeach
                  </select>
                  @error('dokter_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group mx-3">
                      <label for="keluhan">Keluhan</label>
                      <textarea required class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan" rows="3"></textarea>
                      @error('keluhan')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group mx-3">
                      <label for="diagnosa">Diagnosa</label>
                      <textarea required class="form-control @error('diagnosa') is-invalid @enderror" id="diagnosa" name="diagnosa" rows="3"></textarea>
                      @error('diagnosa')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                
                
                <div class="row">
                  <div class="col-6">
                    <div class="form-group mx-3">
                      <label for="terapi">Terapi</label>
                      <textarea required class="form-control @error('terapi') is-invalid @enderror" id="terapi" name="terapi" rows="3"></textarea>
                      @error('terapi')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group mx-3">
                      <label for="layanan_id" class="d-flex">Layanan Pengobatan</label>
                      <select required class="selectpicker @error('layanan_id') is-invalid @enderror" data-live-search="true" name="layanan_id" id="layanan_id">
                        <option value="">Pilih Layanan</option>
                        @foreach ($layanan as $l)
                          <option value="{{ $l->id }}">{{ $l->nama }}</option>
                        @endforeach
                      </select>
                      @error('layanan_id')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                              
              <div class="card-header py-3 my-3">
                <h6 class="m-0 font-weight-bold text-success">Resep Obat</h6>
              </div>
              <div class="form-group mx-3">                  
                <table class="table table-bordered" id="dynamicAddRemove">
                  <tr>
                      <th>Obat</th>
                      <th>Penggunaan</th>
                      <th>Jumlah Obat</th>
                      <th>Aksi</th>
                  </tr>
                  <tr>
                      <td><select required class="selectpicker " data-live-search="true" name="resep[0][obat]" id="obat_id">
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
                      <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-success">Tambah</button></td>
                  </tr>
                </table>
              </div>
            <div class="form-group mx-3">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
      </div>
  </div>
</div>
@endsection
