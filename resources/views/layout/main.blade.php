<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Klinik Pratama | {{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('') }}/assets/css/sb-admin-2.min.css" rel="stylesheet">
  
    <!-- Custom styles for this page -->
    <link href="{{ url('') }}/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Welcome!, {{ auth()->user()->email }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ url('') }}/assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Klinik Pratama 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih tombol logout bila anda yakin ingin keluar dari sistem!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('') }}/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('') }}/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ url('') }}/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    @if ($title=='Dashboard')
    <script type="text/javascript">
        var jumlah = <?php echo json_encode($jumlah); ?>;
    </script>
    <script src="{{ url('') }}/assets/js/demo/chart-area-demo.js"></script>
        
    @endif
    
    <script src="{{ url('') }}/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('') }}/assets/js/demo/datatables-demo.js"></script>

    @if ($title=='Pengobatan')
    <script>
        var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><select required class="selectpicker " data-live-search="true" name="resep[' + i +'][obat]" id="obat"><option value="">Pilih Obat</option>@foreach ($obat as $o)
                            <option value="{{ $o->id }}">{{ $o->nama }}</option>@endforeach</select></td><td><input type="text" name="resep[' + i +'][penggunaan]" placeholder="Contoh : 3x1" class="form-control" /></td><td><input type="text" name="resep['+ i +'][jumlah]" class="form-control" /><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
        $('.selectpicker').selectpicker('render');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
    </script>

    @endif

    @if ($title=='Re-Stock Obat')
    <script>
        var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><select class="selectpicker " data-live-search="true" name="restock[' + i +'][obat]" id="obat" required><option value="">Pilih Obat</option>@foreach ($obat as $o)
                            <option value="{{ $o->id }}">{{ $o->nama }}</option>@endforeach</select></td><td><input type="text" name="restock['+ i +'][jumlah]" class="form-control" required /><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>');
        $('.selectpicker').selectpicker('render');
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
    </script>

    @endif
    
    @if ($title=="Proses Transaksi Pengobatan")
    
    <script type="text/javascript">
    $(document).ready(function() {
        $("#biaya_lab, #biaya_tambahan, #jml_bayar").keyup(function() {
            var pengobatan = $("#layanan").val();
            var hrg_obat = $('#total_hrg_obat').val();
            var biaya_lab  = $("#biaya_lab").val();
            var biaya_tambahan = $("#biaya_tambahan").val();

            var total = parseInt(pengobatan) + parseInt(hrg_obat)+parseInt(biaya_lab) + parseInt(biaya_tambahan);
            $("#total").val(total);

            var bayar = $("#jml_bayar").val();
            var kembali = parseInt(bayar) - parseInt(total);
            $("#kembalian").val(kembali);

        });
    });
</script>
    @endif
    
    
</body>

</html>