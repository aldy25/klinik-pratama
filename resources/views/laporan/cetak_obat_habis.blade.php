<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Data Obat Menipis</title>
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
    <p align="center">Laporan Data Obat Menipis</p>
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Sisa Stok</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
        </tr>
    </thead>
    <tbody>
      @if (count($data) === 0)
      <tr>
        <td colspan="5" align="center">Tidak Ada Data Obat Menipis</td>
      </tr>
          
      @endif
      @php
          $a=0;
      @endphp
      @foreach ($data as $obat)
      <tr>
        <td>{{ ++$a; }}</td>
        <td>{{ $obat->nama }}</td>
        <td>{{ $obat->stok }}</td>
        <td>{{ $obat->satuan }}</td>
        <td>{{ $obat->harga }}</td>
      </tr>
      
      @endforeach
    </tbody>
    </table>
    <div class="container" style="width: 95%;">
      <p align="right">Jambi, {{ date("d M Y") }}</p>
      <p align="right" style="margin-right: 3%">Pemilik</p>
    </div>
    
  </div>
  <script>
    window.print();
  </script>
</body>
</html>