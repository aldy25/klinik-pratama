@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Data Pasien</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>No</th>
                  <th>No RM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Lihat</th>
              </tr>
          </thead>
          <tfoot>
              <tr>
                <th>No</th>
                <th>No RM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Lihat</th>
              </tr>
          </tfoot>
         <tbody>
           @php
               $a=0;
           @endphp
            @foreach ($data as $pasien)
            <tr>
              <td>{{ ++$a }}</td>
              <td>{{ $pasien->no_rm }}</td>
              <td>{{ $pasien->nama }}</td>
              <td>{{ $pasien->alamat }}</td>
              <td>
                <a href="/pasien/rekam-medis/{{ $pasien->id }}" class="btn btn-success">Rekam Medis</a>
                <a href="/pasien/riwayat-lab/{{ $pasien->id }}" class="btn btn-primary">Riwayat Lab</a>
                
            </tr>
            @endforeach
         </tbody>
      </table>
      </div>
  </div>
</div>
    
@endsection