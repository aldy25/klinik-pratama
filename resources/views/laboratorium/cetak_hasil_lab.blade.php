<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Hasil Lab</title>
  <style>
    table.static {
      position: relative;
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div class="form-group" >
    <h3 align="center">Klinik Pratama Dokter Yanti</h3>
    <p align="center">Laporan Hasil Lab</p>
    {{-- <table class="identitas">
      <tbody>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{ $data->pasien->nama }}</td>
        </tr>
        <tr>
          <td><p align="left">No RM</p></td>
          <td>:</td>
          <td>{{ $data->pasien->no_rm }}</td>
        </tr>
        <tr>
          <td><p align="left">Alamat</p></td>
          <td>:</td>
          <td>{{ $data->pasien->alamat }}</td>
        </tr>
        <tr>
          <td>
            <p align="left">Tanggal Pemeriksaan</p>
          </td>
          <td>:</td>
          <td>{{ $data->created_at }}</td>
        </tr>
      </tbody>
      
    </table> --}}
    
    <table style="width: 45%;">
       <tbody>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{ $data->pasien->nama }}</td>
        </tr>
        <tr>
          <td>No RM</td>
          <td>:</td>
          <td>{{ $data->pasien->no_rm }}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{ $data->pasien->alamat }}</td>
        </tr>
        <tr>
          <td>
            Tanggal Pemeriksaan
          </td>
          <td>:</td>
          <td>{{ $data->created_at }}</td>
        </tr>
        <tr>
          <td colspan="3"></td>
        </tr>
       </tbody>
       
    
    </table>
    
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
          <th>Pemeriksaan</th>
          <th>Hasil Pemeriksaan</th>
          <th>Nilai Normal/Rujukan</th>
        </tr>
      </thead>
       <tbody>
         
         
        @if ($data === null)
          <tr>
            <th colspan="3">Data Pemeriksaan Lab Tidak Ditemukan</th>
          </tr>   
         @else
         <tr>
          <th colspan="3" style="text-align: center">Darah Lengkap</th>
         </tr>
          <tr>
            <th>WBC</th>
            <td>
              {{ $data->wbc }}
            </td>
            <td>8-12th : 4.500 - 13.000 jt/ml <br> Dewasa : 4.400 - 11.300 jt/ml</td>  
          </tr>

          <tr>
            <th>RBC</th>
            <td>
              {{ $data->rbc }}
            </td>
            <td>2-6th : 3,9 - 5,3 jt/ml <br> Dewasa : 4,5 - 5,9 jt/ml</td>  
          </tr>
          <tr>
            <th>HGB</th>
            <td>
              {{ $data->hgb }}
            </td>
            <td>lk : 13 - 16 gr/d  pr : 12,3 - 15,3 gr/d</td>  
          </tr>
          <tr>
            <th>HCT</th>
            <td>
              {{ $data->hct }}
            </td>
            <td>lk : 40 - 52%  pr : 35 - 47%</td>  
          </tr>
          <tr>
            <th>PLT</th>
            <td>
              {{$data->plt }}
            </td>
            <td>150.000 - 450.000</td>  
          </tr>

          <tr>
            <th colspan="3" style="text-align: center">Kimia Darah</th>
           </tr>
            <tr>
              <th>GDS</th>
              <td>
                {{$data->gds }}
              </td>
              <td>70-140</td>  
            </tr>

            <tr>
              <th>GDP</th>
              <td>
                {{$data->gdp}}
              </td>
              <td>70-110</td>  
            </tr>
            <tr>
              <th>Gd2 Jani PP</th>
              <td>
                {{ $data->gd2 }}
              </td>
              <td>100-140</td>  
            </tr>
            <tr>
              <th>Cholesterol Total</th>
              <td>
                {{ $data->cholesterol }}
              </td>
              <td>kurang dari 200 </td>  
            </tr>
            <tr>
              <th>Trigliserida Total</th>
              <td>
                {{$data->trigliserida}}
              </td>
              <td>50-150</td>  
            </tr>
            <tr>
              <th>Asam Urat</th>
              <td>
                {{ $data->asam_urat }}
              </td>
              <td>lk : 3,4 - 7%  pr : 2,4 - 5,7%</td>  
            </tr>
            <tr>
              <th>Ureum</th>
              <td>
                {{ $data->ureum }}
              </td>
              <td>10-50</td>  
            </tr>
            <tr>
              <th>Kreatin</th>
              <td>
                {{ $data->kreatin }}
              </td>
              <td>lk : 0,6 - 13%  pr : 0,5 - 1,0%</td>  
            </tr>

            <tr>
              <th colspan="3" style="text-align: center">Serologi</th>
             </tr>
              <tr>
                <th>Golongan Darah</th>
                <td>
                  {{ $data->goldar }}
                </td>
                <td>A/B/O/AB</td>  
              </tr>

              <tr>
                <th>Plano Test (HCG)</th>
                <td>
                  {{ $data->hcg }}
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
                  {{ $data->malaria }}
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
                  {{ $data->warna }}
                </td>
                <td> </td>  
              </tr>

              <tr>
                <th>PH</th>
                <td>
                  {{ $data->ph }}
                </td>
                <td> </td>  
              </tr>
            </tr>

            <tr>
              <th>Berat Jenis</th>
              <td>
                {{ $data->berat_jenis }}
              </td>
              <td> </td>  
            </tr>

            <tr>
              <th>Protein</th>
              <td>
                {{ $data->protein}}
              </td>
              <td>Negatif</td>  
            </tr>
          </tr>
          <tr>
            <th>Reduksi</th>
            <td>
              {{ $data->reduksi }}
            </td>
            <td>Negatif</td>  
          </tr>
          <tr>
            <th>Billirubin</th>
            <td>
              {{ $data->billirubin }}
            </td>
            <td>Negatif</td>  
          </tr>
          <tr>
            <th>Sedimen</th>
            <td>
              {{ $data->sedimen }}
            </td>
            <td> </td>  
          </tr>

          <tr>
            <th>Eritrosit</th>
            <td>
              
              {{ $data->eritrosit }}
            </td>
            <td>0-1/LP3</td>  
          </tr>
          <tr>
            <th>Leukosit</th>
            <td>
              {{ $data->leukosit }}
            </td>
            <td>1-5/LP3</td>  
          </tr>
        </tr>
        </tr>
           
         @endif
              
       </tbody>
       
    
    </table>
    <div class="container" style="width: 95%;">
      <p align="right">Jambi, {{ date("d M Y") }}</p>
      <p align="right" style="margin-right: 3%">Petugas</p>
    </div>
    
  </div>
  <script>
    window.print();
  </script>
</body>
</html>