@php
use App\Models\Diagnosa;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Data Transaksi</title>
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
    <p align="center">Laporan Data Transaksi</p>
    <table class="static" align="center" rules='all' border="1px" style="width: 95%;">
      <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>No RM</th>
            <th>Total <br> Biaya</th>
            <th>Total <br> Bayar</th>
            <th>Kembalian</th>
            <th>Admin</th>
        </tr>
    </thead>
    <tbody>
      @if (count($data) === 0)
          <tr>
            <td colspan="8" align="center">Tidak Ada Riwayat Transaksi</td>
          </tr>
      @endif
      @php
          $a=0;
          $total=0;
      @endphp
      @foreach ($data as $tr)
      @php
          $diagnosa = Diagnosa::where('id',$tr->diagnosa_id)->get()->first();
          $temp = $tr->jml_total;
          $total = $total + $temp;
      @endphp
      <tr>
        <td>{{ ++$a; }}</td>
        <td>{{ $tr->created_at }}</td>
        <td>{{ $diagnosa->pasien->nama }}</td>
        <td>{{ $diagnosa->pasien->no_rm }}</td>
        <td>Rp.{{ $tr->jml_total }}</td>
        <td>Rp.{{ $tr->jml_bayar }}</td>
        <td>Rp.{{ $tr->jml_kembali }}</td>
        <td>{{ $tr->admin->nama }}</td>
      </tr>
      
      @endforeach
      <tr>
        <td colspan="7" align="center"> <b>Total Pendapatan</b></td>
        <td><b>Rp.{{ $total }}</b></td>
      </tr>
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