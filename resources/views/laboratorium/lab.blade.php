@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Riwayat Pemeriksaan Lab</h6>
  </div>
  @if (session()->has('Sukses'))
  <div class="col-12 mt-2">
  <div class="alert alert-primary" role="alert">
    {{ session('Sukses') }}
  </div>
  </div>   
  @endif
  <div class="col-2 mt-3">
    <a href="/lab/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>No RM</th>
                  <th>Nama</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No RM</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
          </tfoot>
         <tbody>
           @php
               $a=0;
           @endphp
            @foreach ($data as $lab)
            <tr>
              <td>{{ ++$a }}</td>
              <td>{{ $lab->created_at }}</td>
              <td>{{ $lab->pasien->no_rm }}</td>
              <td>{{ $lab->pasien->nama }}</td>
              <td>
                <a href="/lab/edit/{{ $lab->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                <form action="/lab/delete/{{ $lab->id }}" method="POST" class="d-inline">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Benar ingin menghapus data?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
                <a href="/lab/cetak/{{ $lab->id }}" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>
              </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      </div>
  </div>
</div>
    
@endsection