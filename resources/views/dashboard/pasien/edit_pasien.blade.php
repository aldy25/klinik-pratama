
@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Edit Data Pasien</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="/pasien/update/{{ $pasien->id }}">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid  @enderror" id="nama" name="nama" value="{{ old('nama', $pasien->nama) }}">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="no_rm">No Rekam Medis</label>
                <input type="hidden" id="no_rm" name="no_rm" value="{{ $pasien->no_rm }}">
                <input type="text" class="form-control @error('no_rm') is-invalid @enderror" id="no_rm" name="no_rm" value="{{ old('no_rm', $pasien->no_rm) }}" disabled>
                @error('no_rm')
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
                  <option value="Laki-laki" @if ($pasien->jenis_kelamin=='Laki-laki' or old('jenis_kelamin')=='Laki-laki')
                    {{ 'selected' }}
                      
                  @endif>Laki-Laki</option>
                  <option value="Perempuan" @if ($pasien->jenis_kelamin=='Perempuan' or old('jenis_kelamin')=='Perempuan')
                    {{ 'selected' }}
                      
                  @endif>Perempuan</option>
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
                <input type="date" class="form-control @error('tgl_lahir') is-invalid  @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir',$pasien->tgl_lahir) }}">
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
                <textarea class="form-control @error('alamat') is-invalid  @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat',$pasien->alamat) }}</textarea>
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
                <input type="text" class="form-control @error('no_telp') is-invalid  @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp',$pasien->no_telp) }}" >
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
                <label for="nama_kk">Nama KK</label>
                <input type="text" class="form-control @error('nama_kk') is-invalid  @enderror" id="nama_kk" name="nama_kk" value="{{ old('nama_kk',$pasien->nama_kk) }}" >
                @error('nama_kk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>    
                @enderror
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