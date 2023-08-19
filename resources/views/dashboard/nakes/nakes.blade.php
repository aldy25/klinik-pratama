@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Tenaga Kesehatan</h6>
  </div>
  
  @if (session()->has('Sukses'))
  <div class="col-12 mt-2">
  <div class="alert alert-primary" role="alert">
    {{ session('Sukses') }}
  </div>
  </div>
  @endif

  <div class="col-2 mt-3">
    <a href="/nakes/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No. Telp</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                  </tr>
              </tfoot>
             <tbody>
                @php
                    $a=0;
                @endphp
               @foreach ($data as $nakes)
               <tr>
                <td>{{ ++$a; }}</td>
                <td>{{ $nakes->nama }}</td>
                <td>{{ $nakes->nik }}</td>
                <td>{{ $nakes->jenis_kelamin }}</td>
                <td>{{ $nakes->tgl_lahir }}</td>
                <td>{{ $nakes->alamat }}</td>
                <td>{{ $nakes->no_telp }}</td>
                <td>
                  <a href="/nakes/edit/{{ $nakes->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                  <form action="/nakes/delete/{{ $nakes->id }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Benar ingin menghapus data?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                </td>
              </tr>
               @endforeach
               
             </tbody>
          </table>
      </div>
  </div>
</div>
    
@endsection