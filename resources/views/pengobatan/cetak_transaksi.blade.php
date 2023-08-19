<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Transaksi</title>
  <style>
    table.static {
      position: relative;
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div class="form-group">
    <h3 align="center">Klinik Pratama Dokter Yanti</h3>
    <p align="center">Struk Pengobatan</p>
    <hr>
    <table style="width: 45%;">
      <tbody>
       <tr>
         <td>Nama</td>
         <td>:</td>
         <td>{{ $diagnosa->pasien->nama }}</td>
       </tr>
       <tr>
         <td>No RM</td>
         <td>:</td>
         <td>{{ $diagnosa->pasien->no_rm }}</td>
       </tr>
       <tr>
         <td>Alamat</td>
         <td>:</td>
         <td>{{ $diagnosa->pasien->alamat }}</td>
       </tr>
       <tr>
         <td>
           Tanggal Transaksi
         </td>
         <td>:</td>
         <td>{{ $transaksi->created_at }}</td>
       </tr>
       <tr>
         <td colspan="3"></td>
       </tr>
       <tr>
        <th colspan="3" align="left">Pengobatan</th>
      </tr>
      <tr>
        <td>{{ $transaksi->layanan->nama }}</td>
        <td>:</td>
        <td>Rp {{ $transaksi->hrg_pengobatan }}</td>
      </tr>
      <tr>
        <th colspan="3" align="left">Obat</th>
      </tr>
      @foreach ($diagnosa->resep as $resep)
      <tr>
        <td>{{ $resep->obat->nama }}</td>
        <td>:</td>
        <td>Rp.{{ $resep->total_hrg }}</td>
      </tr>
      @endforeach
      
      <tr>
        <td>Biaya Lab</td>
        <td>:</td>
        <td>Rp.{{ $transaksi->biaya_lab }}</td>
      </tr>
      <tr>
        <td>Biaya Tambahan</td>
        <td>:</td>
        <td>Rp.{{ $transaksi->biaya_tambahan }}</td>
      </tr>
      <tr>
        <td colspan="3"><hr></td>
      </tr>
      <tr>
        <th align="left">Total</th>
        <td>:</td>
        <th align="left">Rp.{{ $transaksi->jml_total }}</th>
      </tr>
      <tr>
        <th align="left">Total Bayar</th>
        <td>:</td>
        <th align="left">Rp.{{ $transaksi->jml_bayar }}</th>
      </tr>
      <tr>
        <th align="left">
          Kembalian
        </th>
        <td>:</td>
        <th align="left">Rp.{{ $transaksi->jml_kembali }}</th>
      </tr>

      </tbody>
   </table>
    <div class="container" style="width: 95%;">
      <p align="right">Jambi, {{ date("d M Y") }}</p>
      <p align="right" style="margin-right: 3%">Admin</p>
      <br>
      <p align="right">{{ $transaksi->admin->nama }}</p>
    </div>
    
  </div>
  <script>
    window.print();
  </script>
</body>
</html>