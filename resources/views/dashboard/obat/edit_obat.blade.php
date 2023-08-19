@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Edit Data Obat</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-6">
        <form method="POST" action="/obat/update/{{ $obat->id }}">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Obat</label>
            <input type="text" class="form-control @error('nama') is-invalid  @enderror" id="nama" name="nama" value="{{ old('nama',$obat->nama) }}">
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
            
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid  @enderror" id="harga" name="harga" value="{{ old('harga',$obat->harga) }}">
            @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
          </div>
          <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" class="form-control @error('satuan') is-invalid  @enderror" id="satuan" name="satuan" value="{{ old('satuan',$obat->satuan) }}">
            @error('satuan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid  @enderror" id="stok" name="stok" value="{{ old('stok',$obat->stok) }}">
            @error('stok')
            <div class="invalid-feedback">
              {{ $message }}
            </div>    
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
    
   
  </div>
</div>
    
@endsection