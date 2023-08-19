@extends('layout.main')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Pemeriksaan Lab </h1>
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
              <form action="/lab/update/{{ $data->id }}" method="POST" id="pembayaran" name="pembayaran">
                @csrf
                <div class="form-group  col-5">
                  <label for="pasien_id" class="d-inline">Pasien</label>
                  <div class="input-group">
                    <input type="text" id="wbc" name="wbc" class="form-control" aria-describedby="basic-addon1" disabled value="{{ $data->pasien->nama }}">
                  </div>
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
                        <div class="form-group">
                          <input type="number" class="form-control @error('wbc') is-invalid  @enderror" id="wbc" name="wbc" value="{{ old('wbc', $data->wbc) }}">
                          @error('wbc')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>8-12th : 4.500 - 13.000 jt/ml <br> Dewasa : 4.400 - 11.300 jt/ml</td>  
                    </tr>

                    <tr>
                      <th>RBC</th>
                      <td>
                        <div class="form-group">
                          <input type="number" class="form-control @error('rbc') is-invalid  @enderror" id="rbc" name="rbc" value="{{ old('rbc', $data->rbc) }}">
                          @error('rbc')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>2-6th : 3,9 - 5,3 jt/ml <br> Dewasa : 4,5 - 5,9 jt/ml</td>  
                    </tr>
                    <tr>
                      <th>HGB</th>
                      <td>
                        <div class="form-group">
                          <input type="number" class="form-control @error('hgb') is-invalid  @enderror" id="hgb" name="hgb" value="{{ old('hgb', $data->hgb) }}">
                          @error('hgb')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>lk : 13 - 16 gr/d  pr : 12,3 - 15,3 gr/d</td>  
                    </tr>
                    <tr>
                      <th>HCT</th>
                      <td>
                        <div class="form-group">
                          <input type="number" class="form-control @error('hct') is-invalid  @enderror" id="hct" name="hct" value="{{ old('hct', $data->hct) }}">
                          @error('hct')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>lk : 40 - 52%  pr : 35 - 47%</td>  
                    </tr>
                    <tr>
                      <th>PLT</th>
                      <td>
                        <div class="form-group">
                          <input type="number" class="form-control @error('plt') is-invalid  @enderror" id="plt" name="plt" value="{{ old('plt', $data->plt) }}">
                          @error('plt')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>150.000 - 450.000</td>  
                    </tr>

                    <tr>
                      <th colspan="3" style="text-align: center">Kimia Darah</th>
                     </tr>
                      <tr>
                        <th>GDS</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('gds') is-invalid  @enderror" id="gds" name="gds" value="{{ old('gds', $data->gds) }}">
                            @error('gds')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>70-140</td>  
                      </tr>
  
                      <tr>
                        <th>GDP</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('gdp') is-invalid  @enderror" id="gdp" name="gdp" value="{{ old('gdp', $data->gdp) }}">
                            @error('gdp')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>70-110</td>  
                      </tr>
                      <tr>
                        <th>Gd2 Jani PP</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('gd2') is-invalid  @enderror" id="gd2" name="gd2" value="{{ old('gd2', $data->gd2) }}">
                            @error('gd2')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>100-140</td>  
                      </tr>
                      <tr>
                        <th>Cholesterol Total</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('cholesterol') is-invalid  @enderror" id="cholesterol" name="cholesterol" value="{{ old('cholesterol', $data->cholesterol) }}">
                            @error('cholesterol')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>kurang dari 200 </td>  
                      </tr>
                      <tr>
                        <th>Trigliserida Total</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('trigliserida') is-invalid  @enderror" id="trigliserida" name="trigliserida" value="{{ old('trigliserida', $data->trigliserida) }}">
                            @error('trigliserida')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>50-150</td>  
                      </tr>
                      <tr>
                        <th>Asam Urat</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('asam_urat') is-invalid  @enderror" id="asam_urat" name="asam_urat" value="{{ old('asam_urat', $data->asam_urat) }}">
                            @error('asam_urat')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>lk : 3,4 - 7%  pr : 2,4 - 5,7%</td>  
                      </tr>
                      <tr>
                        <th>Ureum</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('ureum') is-invalid  @enderror" id="ureum" name="ureum" value="{{ old('ureum', $data->ureum) }}">
                            @error('ureum')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td>10-50</td>  
                      </tr>
                      <tr>
                        <th>Kreatin</th>
                        <td>
                          <div class="form-group">
                            <input type="number" class="form-control @error('kreatin') is-invalid  @enderror" id="kreatin" name="kreatin" value="{{ old('kreatin', $data->kreatin) }}">
                            @error('kreatin')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
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
                                <option value="A" {{ ($data->goldar==='A') ? 'selected' : '' }}>A</option>
                                <option value="B" {{ ($data->goldar==='B') ? 'selected' : '' }}>B</option>
                                <option value="O" {{ ($data->goldar==='O') ? 'selected' : '' }}>O</option>
                                <option value="AB" {{ ($data->goldar==='AB') ? 'selected' : '' }}>AB</option>
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
                                <option value="Positif" {{ ($data->hcg==='Positif') ? 'selected' : '' }}>Positif</option>
                                <option value="Negatif" {{ ($data->hcg==='Negatif') ? 'selected' : '' }}>Negatif</option>
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
                                <option value="Positif" {{ ($data->malaria==='Positif') ? 'selected' : '' }}>Positif</option>
                                <option value="Negatif" {{ ($data->malaria==='Negatif') ? 'selected' : '' }}>Negatif</option>
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
                            
                          <div class="form-group">
                            <input type="text" class="form-control @error('warna') is-invalid  @enderror" id="warna" name="warna" value="{{ old('warna', $data->warna) }}">
                            @error('kreatin')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                          </td>
                          <td> </td>  
                        </tr>
    
                        <tr>
                          <th>PH</th>
                          <td>
                            <div class="form-group">
                              <input type="number" class="form-control @error('ph') is-invalid  @enderror" id="ph" name="ph" value="{{ old('ph', $data->ph) }}">
                              @error('ph')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>    
                              @enderror
                              
                            </div>
                          </td>
                          <td> </td>  
                        </tr>
                      </tr>

                      <tr>
                        <th>Berat Jenis</th>
                        <td>
                          
                          <div class="form-group">
                            <input type="number" class="form-control @error('berat_jenis') is-invalid  @enderror" id="berat_jenis" name="berat_jenis" value="{{ old('berat_jenis', $data->berat_jenis) }}">
                            @error('berat_jenis')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>    
                            @enderror
                            
                          </div>
                        </td>
                        <td> </td>  
                      </tr>
  
                      <tr>
                        <th>Protein</th>
                        <td>
                          <div class="form-group">
                            <select class="form-control" id="protein" name="protein">
                              <option value="">Pilih</option>
                              <option value="Positif"{{ ($data->protein==='Positif') ? 'selected' : '' }}>Positif</option>
                              <option value="Negatif" {{ ($data->protein==='Negatif') ? 'selected' : '' }}>Negatif</option>
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
                            <option value="Positif" {{ ($data->reduksi==='Positif') ? 'selected' : '' }}>Positif</option>
                            <option value="Negatif" {{ ($data->reduksi==='Negatif') ? 'selected' : '' }}>Negatif</option>
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
                            <option value="Positif" {{ ($data->billirubin==='Positif') ? 'selected' : '' }}>Positif</option>
                            <option value="Negatif" {{ ($data->billirubin==='Negatif') ? 'selected' : '' }}>Negatif</option>
                          </select>
                        </div>
                      </td>
                      <td>Negatif</td>  
                    </tr>
                    <tr>
                      <th>Sedimen</th>
                      <td>
                        
                        <div class="form-group">
                          <input type="text" class="form-control @error('sedimen') is-invalid  @enderror" id="sedimen" name="sedimen" value="{{ old('sedimen', $data->sedimen) }}">
                          @error('sedimen')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td> </td>  
                    </tr>

                    <tr>
                      <th>Eritrosit</th>
                      <td>
                        
                        <div class="form-group">
                          <input type="number" class="form-control @error('eritrosit') is-invalid  @enderror" id="eritrosit" name="eritrosit" value="{{ old('eritrosit', $data->eritrosit) }}">
                          @error('eritrosit')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
                      </td>
                      <td>0-1/LP3</td>  
                    </tr>
                    <tr>
                      <th>Leukosit</th>
                      <td>
                        
                        <div class="form-group">
                          <input type="number" class="form-control @error('leukosit') is-invalid  @enderror" id="leukosit" name="leukosit" value="{{ old('leukosit', $data->leukosit) }}">
                          @error('leukosit')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>    
                          @enderror
                          
                        </div>
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
