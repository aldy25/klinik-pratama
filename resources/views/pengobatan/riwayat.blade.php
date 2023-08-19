@php
    use App\Models\Diagnosa;
        
@endphp
@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Riwayat Transaksi</h6>
  </div>
  @if (session()->has('Sukses'))
  <div class="col-12 mt-2">
  <div class="alert alert-primary" role="alert">
    {{ session('Sukses') }}
  </div>
  </div>
      
  @endif
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>No RM</th>
                      <th>Nama</th>
                      <th>Total Biaya <br>Pengobatan</th>
                      <th>Total Bayar</th>
                      <th>Kembalian</th>
                      <th>Admin</th>
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
                <th>{{ $tr->created_at }}</th>
                <td>{{ $diagnosa->pasien->no_rm }}</td>
                <td>{{ $diagnosa->pasien->nama }}</td>
                <td>{{ $tr->jml_total }}</td>
                <td>{{ $tr->jml_bayar }}</td>
                <td>{{ $tr->jml_kembali }}</td>
                <td>{{ $tr->admin->nama }}</td>
                <td><a href="/transaksi/cetak/{{ $tr->id }}" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
                </td>
              </tr>
    
              @endforeach   
             </tbody>
          </table>
      </div>
  </div>
</div>
    
@endsection