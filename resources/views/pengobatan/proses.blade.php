@php
    use App\Models\Diagnosa;
    use App\Models\Resep;
    $diagnosa = Diagnosa::where('id',$data->diagnosa_id)->get()->first();
    $resep = Resep::where('diagnosa_id',$diagnosa->id)->get();
@endphp

@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Transaksi </h1>
</div>

<div class="row">

  <div class="col-lg-12 mb-4">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Pembayaran</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form action="/transaksi/update/{{ $data->id }}" method="POST" id="pembayaran" name="pembayaran">
                @csrf
              <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                
                 <tbody>
                    <tr>
                      <td><b>NO RM </b></td>
                      
                      <td>{{ $diagnosa->pasien->no_rm }}</td>  
                    </tr>
                    <tr>
                      <td><b>Nama </b></td>
                      <td>{{ $diagnosa->pasien->nama }}</td>  
                    </tr>
                    <tr>
                      <td><b>Layanan</b></td>
                      <td>{{ $data->layanan->nama }}</td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" id="layanan" name="layanan" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $data->hrg_pengobatan }}">
                      </div>
                      </td>  
                    </tr>
                    <input type="hidden" id="total_hrg_obat" name="total_hrg_obat" value="{{ $data->total_hrg_obat }}">
                    @foreach ($resep as $rs)
                    <tr>
                      <td><b>{{ $rs->obat->nama }}</b></td>
                      <td>{{ $rs->jumlah }}</td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $rs->total_hrg }}">
                      </div>
                      </td>  
                    </tr>    
                    @endforeach
                    <tr>
                      <td><b>Biaya Lab</b></td>
                      <td></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" required min="0" class="form-control" value="0" aria-describedby="basic-addon1" id="biaya_lab" name="biaya_lab">
                      </div>
                      </td>  
                    </tr>
                    <tr>
                      <td><b>Biaya Tambahan</b></td>
                      <td></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" required min="0" class="form-control" value="0" aria-describedby="basic-addon1" id="biaya_tambahan" name="biaya_tambahan">
                      </div>
                      </td>  
                    </tr>
                    <tr>
                      <td><b>Total</b></td>
                      <td></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" class="form-control"  value="{{ $data->hrg_pengobatan + $data->total_hrg_obat }}" aria-describedby="basic-addon1" readonly="true" id="total" name="total">
                      </div>
                      </td>  
                    </tr>
                    <tr>
                      <td><b>Jumlah Bayar</b></td>
                      <td></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input required type="number" min="0" class="form-control" value="0" aria-describedby="basic-addon1" id="jml_bayar" name="jml_bayar">
                      </div>
                      </td>  
                    </tr>
                    <tr>
                      <td><b>Kembalian</b></td>
                      <td></td>
                      <td>
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" class="form-control" value="0" readonly="true" aria-describedby="basic-addon1" id="kembalian" name="kembalian">
                      </div>
                      </td>  
                    </tr>
                    
                 </tbody>
                 
              </table>
              <div class="form-group mx-3">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              
            </form>
          </div>
          </div>
      </div>

  </div>
</div>

@endsection
