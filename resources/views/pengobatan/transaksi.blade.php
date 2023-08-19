@php
    use App\Models\Diagnosa;
        
@endphp
@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Transaksi</h6>
  </div>
  @if (session()->has('Sukses'))
  <div class="col-12 mt-2">
  <div class="alert alert-primary" role="alert">
    {{ session('Sukses') }}
  </div>
  </div>
      
  @endif
  <div class="col-2 mt-3">
    <a href="/pengobatan" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>NO RM</th>
                      <th>Nama Pasien</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
             <tbody>
              @php
                  $a=0;
              @endphp 
              @foreach ($data as $tr)
              @php
                  $diagnosa = Diagnosa::where('id',$tr->diagnosa_id)->get()->first();
              @endphp
              <tr>
                <td>{{ ++$a; }}</td>
                <td>{{ $diagnosa->pasien->no_rm }}</td>
                <td>{{ $diagnosa->pasien->nama }}</td>
                <td><a href="/transaksi/proses/{{ $tr->id }}" class="btn btn-success">Proses</a> <a href="/transaksi/hapus/{{ $tr->id }}" class="btn btn-danger">Hapus</a></td>
              </tr>
    
              @endforeach   
             </tbody>
          </table>
      </div>
  </div>
</div>
    
@endsection