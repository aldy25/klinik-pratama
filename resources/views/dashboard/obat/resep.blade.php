@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Detail Pengambilan Obat </h1>
</div>

<div class="row">

  <div class="col-lg-12 mb-4">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Obat yang Perlu diambil pasien</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form action="/obat/konfirmasi/{{ $data->id }}}" method="POST" >
              @csrf
              <table class="table table-bordered " width="100%" cellspacing="0">
                
                 <tbody>
                    <tr>
                      <td><b>NO RM </b></td>
                      <td>{{ $data->pasien->no_rm }}</td>  
                    </tr>
                    
                    <tr>
                      <td><b>Nama </b></td>
                      <td>{{ $data->pasien->nama }}</td>  
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                    </tr>
                    <tr>
                      <th><b>Nama Obat</b></th>
                      <th><b>Jumlah</b></th>
                    </tr>
                    @foreach ($data->resep as $rs)
                    <tr>
                      <td><b>{{ $rs->obat->nama }}</b></td>
                      <td>{{ $rs->jumlah }}</td>  
                    </tr>    
                    @endforeach
                    
                    
                 </tbody>
                 
              </table>
              <div class="form-group mx-3">
                <button type="submit" class="btn btn-success">Konfirmasi Pengambilan</button>
              </div>
              
            </form>
          </div>
          </div>
      </div>

  </div>
</div>

@endsection
