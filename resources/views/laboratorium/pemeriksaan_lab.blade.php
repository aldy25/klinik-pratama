@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Pemeriksaan Lab </h1>
</div>

<div class="row">

  <div class="col-lg-12 mb-4">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Hasil Pemeriksaan Lab</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form action="/lab/save" method="POST" id="pembayaran" name="pembayaran">
                @csrf
                <div class="form-group col-5">
                  <label for="pasien_id" class="d-inline">Pasien</label>
                  <select required class="form-control selectpicker @error('pasien_id') is-invalid @enderror" data-live-search="true" name="pasien_id" id="pasien_id">
                    <option value="">Pilih Pasien</option>
                    @foreach ($data as $p)
                    <option value="{{ $p->id }}">{{ $p->no_rm }} | {{ $p->nama }}</option>
                    @endforeach
                  </select>
                  @error('pasien_id')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Pemeriksaan</th>
                    <th>Hasil Pemeriksaan</th>
                    <th>Nilai Normal/Rujukan</th>
                  </tr>
                </thead>
                 <tbody>
                   <tr>
                    <th colspan="3" style="text-align: center">Darah Lengkap</th>
                   </tr>
                    <tr>
                      <th>WBC</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="wbc" name="wbc" class="form-control" aria-describedby="basic-addon1"value="">
                      </td>
                      <td>8-12th : 4.500 - 13.000 jt/ml <br> Dewasa : 4.400 - 11.300 jt/ml</td>  
                    </tr>

                    <tr>
                      <th>RBC</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="rbc" name="rbc" class="form-control" aria-describedby="basic-addon1" value="">
                      </td>
                      <td>2-6th : 3,9 - 5,3 jt/ml <br> Dewasa : 4,5 - 5,9 jt/ml</td>  
                    </tr>
                    <tr>
                      <th>HGB</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="hgb" name="hgb" class="form-control" aria-describedby="basic-addon1"value="">
                      </td>
                      <td>lk : 13 - 16 gr/d  pr : 12,3 - 15,3 gr/d</td>  
                    </tr>
                    <tr>
                      <th>HCT</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="hct" name="hct" class="form-control" aria-describedby="basic-addon1"value="">
                      </td>
                      <td>lk : 40 - 52%  pr : 35 - 47%</td>  
                    </tr>
                    <tr>
                      <th>PLT</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="plt" name="plt" class="form-control" aria-describedby="basic-addon1"value="">
                      </td>
                      <td>150.000 - 450.000</td>  
                    </tr>

                    <tr>
                      <th colspan="3" style="text-align: center">Kimia Darah</th>
                     </tr>
                      <tr>
                        <th>GDS</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="gds" name="gds" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>70-140</td>  
                      </tr>
  
                      <tr>
                        <th>GDP</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="gdp" name="gdp" class="form-control" aria-describedby="basic-addon1" value="">
                        </td>
                        <td>70-110</td>  
                      </tr>
                      <tr>
                        <th>Gd2 Jani PP</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="gd2" name="gd2" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>100-140</td>  
                      </tr>
                      <tr>
                        <th>Cholesterol Total</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="cholesterol" name="cholesterol" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>kurang dari 200 </td>  
                      </tr>
                      <tr>
                        <th>Trigliserida Total</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="trigliserida" name="trigliserida" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>50-150</td>  
                      </tr>
                      <tr>
                        <th>Asam Urat</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="asam_urat" name="asam_urat" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>lk : 3,4 - 7%  pr : 2,4 - 5,7%</td>  
                      </tr>
                      <tr>
                        <th>Ureum</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="ureum" name="ureum" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>10-50</td>  
                      </tr>
                      <tr>
                        <th>Kreatin</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="kreatin" name="kreatin" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td>lk : 0,6 - 13%  pr : 0,5 - 1,0%</td>  
                      </tr>

                      <tr>
                        <th colspan="3" style="text-align: center">Serologi</th>
                       </tr>
                        <tr>
                          <th>Golongan Darah</th>
                          <td>
                            <div class="form-group">
                              <select class="form-control" id="goldar" name="goldar">
                                <option>Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                              </select>
                            </div>
                          </td>
                          <td>A/B/O/AB</td>  
                        </tr>
    
                        <tr>
                          <th>Plano Test (HCG)</th>
                          <td>
                            <div class="form-group">
                              <select class="form-control" id="hcg" name="hcg">
                                <option value="">Pilih</option>
                                <option value="Positif">Positif</option>
                                <option value="Negatif">Negatif</option>
                              </select>
                            </div>
                          </td>
                          <td>Positif/Negatif</td>  
                        </tr>
                      </tr>
                      <tr>
                        <th colspan="3" style="text-align: center">Parasitologi</th>
                       </tr>
                        <tr>
                          <th>Malaria/DDR</th>
                          <td>
                            <div class="form-group">
                              <select class="form-control" id="malaria" name="malaria">
                                <option value="">Pilih</option>
                                <option value="Positif">Positif</option>
                                <option value="Negatif">Negatif</option>
                              </select>
                            </div>
                          </td>
                          <td>Positif/Negatif</td>  
                        </tr>
                      </tr>

                      <tr>
                        <th colspan="3" style="text-align: center">Urine Lengkap</th>
                       </tr>
                        <tr>
                          <th>Warna</th>
                          <td>
                            <div class="input-group">
                            <input type="text" id="warna" name="warna" class="form-control" aria-describedby="basic-addon1"value="">
                          </td>
                          <td> </td>  
                        </tr>
    
                        <tr>
                          <th>PH</th>
                          <td>
                            <div class="input-group">
                            <input type="number" id="ph" name="ph" class="form-control" aria-describedby="basic-addon1" value="">
                          </td>
                          <td> </td>  
                        </tr>
                      </tr>

                      <tr>
                        <th>Berat Jenis</th>
                        <td>
                          <div class="input-group">
                          <input type="number" id="berat_jenis" name="berat_jenis" class="form-control" aria-describedby="basic-addon1"value="">
                        </td>
                        <td> </td>  
                      </tr>
  
                      <tr>
                        <th>Protein</th>
                        <td>
                          <div class="form-group">
                            <select class="form-control" id="protein" name="protein">
                              <option value="">Pilih</option>
                              <option value="Positif">Positif</option>
                              <option value="Negatif">Negatif</option>
                            </select>
                          </div>
                        </td>
                        <td>Negatif</td>  
                      </tr>
                    </tr>
                    <tr>
                      <th>Reduksi</th>
                      <td>
                        <div class="form-group">
                          <select class="form-control" id="reduksi" name="reduksi">
                            <option value="">Pilih</option>
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                          </select>
                        </div>
                      </td>
                      <td>Negatif</td>  
                    </tr>
                    <tr>
                      <th>Billirubin</th>
                      <td>
                        <div class="form-group">
                          <select class="form-control" id="billirubin" name="billirubin">
                            <option value="">Pilih</option>
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                          </select>
                        </div>
                      </td>
                      <td>Negatif</td>  
                    </tr>
                    <tr>
                      <th>Sedimen</th>
                      <td>
                        <div class="input-group">
                        <input type="text" id="sedimen" name="sedimen" class="form-control" aria-describedby="basic-addon1" value="">
                      </td>
                      <td> </td>  
                    </tr>

                    <tr>
                      <th>Eritrosit</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="eritrosit" name="eritrosit" class="form-control" aria-describedby="basic-addon1" value="">
                      </td>
                      <td>0-1/LP3</td>  
                    </tr>
                    <tr>
                      <th>Leukosit</th>
                      <td>
                        <div class="input-group">
                        <input type="number" id="leukosit" name="leukosit" class="form-control" aria-describedby="basic-addon1" value="">
                      </td>
                      <td>1-5/LP3</td>  
                    </tr>
                  </tr>
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
