@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Tambah Data Dokter</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="/dokter/save">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" autofocus class="form-control @error('nama') is-invalid  @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid  @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control @error('jenis_kelamin') is-invalid  @enderror" id="jenis_kelamin" name="jenis_kelamin">
                  <option>Pilih jenis kelamin</option>
                  <option value="Laki-laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid  @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                @error('tgl_lahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid  @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="no_telp">Nomor Telepon</label>
                <input type="text" class="form-control @error('no_telp') is-invalid  @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" >
                @error('no_telp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    id="email" name="email" aria-describedby="emailHelp" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-user"
                    id="password" name="password" required>
              </div>
            </div>
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