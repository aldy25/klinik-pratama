<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Data Tenaga Kesehatan
  </title>
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
    <p align="center">Laporan Data Tenaga Kesehatan</p>
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis<br>Kelamin</th>
            <th>Tanggal<br>Lahir</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>
    </thead>
    <tbody>
      @php
          $a=0;
      @endphp
      @foreach ($data as $nakes)
      <tr>
        <td>{{ ++$a; }}</td>
        <td>{{ $nakes->nama }}</td>
        <td>{{ $nakes->jenis_kelamin }}</td>
        <td>{{ $nakes->tgl_lahir }}</td>
        <td>{{ $nakes->alamat }}</td>
        <td>{{ $nakes->no_telp }}</td>
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