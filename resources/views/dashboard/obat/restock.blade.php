@extends('layout.main')

@section('content')
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Obat Masuk</h6>
        </div>
        @if (session()->has('Sukses'))
            <div class="col-12 mt-2">
                <div class="alert alert-primary" role="alert">
                    {{ session('Sukses') }}
                </div>
            </div>
        @endif
        <div class="col-6 mt-3">
            <p class="d-inline mx-3">Obat Baru ? Klik <a href="/obat/create" class="text-decoration-none">Disini</a></p>

        </div>
        <div class="card-body">
            <div class="form-group mx-3">
                <form action="/obat/restock/update" method="POST">
                    @csrf
                    <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>Obat</th>
                            <th>Jumlah Obat</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td><select class="selectpicker " data-live-search="true" name="restock[0][obat]" id="obat_id"
                                    required>
                                    <option value="">Pilih Obat</option>
                                    @foreach ($obat as $o)
                                        <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input type="text" name="restock[0][jumlah]" class="form-control" required />
                            </td>
                            <td><button type="button" name="add" id="dynamic-ar"
                                    class="btn btn-outline-success">Tambah</button></td>
                        </tr>
                    </table>
                    <div class="form-group mx-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
