<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Data Inventaris Rusak</title>
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
    <p align="center">Laporan Data Inventaris Rusak</p>
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
      @if (count($data) === 0)
      <tr>
        <td colspan="5" align="center">Tidak Ada Data Inventaris Rusak</td>
      </tr>
          
      @endif
      @php
          $a=0;
      @endphp
      @foreach ($data as $i)
      <tr>
        <td>{{ ++$a; }}</td>
        <td>{{ $i->nama }}</td>
        <td>{{ $i->kondisi }}</td>
        <td>{{ $i->keterangan }}</td>
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