<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Data Pasien</title>
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
    <p align="center">Laporan Data Pasien</p>
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No RM</th>
            <th>Jenis<br>Kelamin</th>
            <th>Tanggal<br>Lahir</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Nama<br>KK</th>
        </tr>
    </thead>
    <tbody>
      @php
          $a=0;
      @endphp
      @foreach ($data as $pasien)
      <tr>
        <td>{{ ++$a; }}</td>
        <td>{{ $pasien->nama }}</td>
        <td>{{ $pasien->no_rm }}</td>
        <td>{{ $pasien->jenis_kelamin }}</td>
        <td>{{ $pasien->tgl_lahir }}</td>
        <td>{{ $pasien->alamat }}</td>
        <td>{{ $pasien->no_telp }}</td>
        <td>{{ $pasien->nama_kk }}</td>
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