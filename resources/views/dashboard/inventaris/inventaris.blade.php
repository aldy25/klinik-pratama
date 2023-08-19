@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Inventaris</h6>
  </div>
  @if (session()->has('Sukses'))
  <div class="col-12 mt-2">
  <div class="alert alert-primary" role="alert">
    {{ session('Sukses') }}
  </div>
  </div>   
  @endif
  <div class="col-2 mt-3">
    <a href="/inventaris/create" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kondisi</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kondisi</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
              </tr>
              </tfoot>
             <tbody>
                @php
                    $a=0;
                @endphp
               @foreach ($data as $inventaris)
               <tr>
                <td>{{ ++$a; }}</td>
                <td>{{ $inventaris->nama }}</td>
                <td>{{ $inventaris->kondisi }}</td>
                <td>{{ $inventaris->keterangan }}</td>
                <td>
                  <a href="/inventaris/edit/{{ $inventaris->id }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
               <form action="/inventaris/delete/{{ $inventaris->id }}" method="POST" class="d-inline">
                 @csrf
                 <button class="btn btn-danger" onclick="return confirm('Benar ingin menghapus data?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
               </form></td>
              </tr>
              @endforeach
               
             </tbody>
          </table>
      </div>
  </div>
</div>
    
@endsection