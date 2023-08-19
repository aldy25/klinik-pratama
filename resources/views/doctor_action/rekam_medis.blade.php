@extends('layout.main')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekam Medis Pasien</h1>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Rekam Medis Pasien</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered dt-responsive nowrap" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Keluhan</th>
                                    <th>Dokter</th>
                                    <th>Diagnosa</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $a = 0;
                                @endphp
                                @foreach ($rekam_medis as $rm)
                                    <tr>
                                        <td>{{ ++$a }}</td>
                                        @php
                                            $newtime = strtotime($rm->created_at);
                                            $data = date('M d, Y', $newtime);
                                        @endphp
                                        <td>{{ $data }}</td>
                                        <td>{{ $rm->pasien->nama }}</td>
                                        <td>{{ $rm->keluhan }}</td>
                                        <td>{{ $rm->dokter->nama }}</td>
                                        <td>{{ $rm->diagnosa }}</td>
                                        <td>{{ $rm->terapi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
