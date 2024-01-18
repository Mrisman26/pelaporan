<!DOCTYPE html>

<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <!-- Main content -->
                <br>
                <!-- /.content-header -->
                @if (session()->has('success'))
                <div class=" alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tanggapi Laporan</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form  action="{{ url('/updatep') }}" method="post">
                                            @csrf
                                            @foreach ($pc as $kelompok3 )
                                                <table class="table table-striped">
                                                    <tr>
                                                        <input type="hidden" name="idpengajuan" placeholder="id"
                                                        value="{{ $kelompok3->idpengajuan }}">
                                                    </tr>
                                                    <tr>
                                                        <th><label for="">Nama Pengajuan</label>
                                                        <input type="text" name="nama_pengaju" class="form-control" readonly
                                                        value="{{ $kelompok3->nama_pengaju }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Nama PC</label>
                                                        <input type="text" name="namapc" class="form-control" readonly
                                                        value="{{ $kelompok3->namapc}}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Nama LAB</label>
                                                        <input type="text" name="namalab" class="form-control" readonly
                                                        value="{{ $kelompok3->namalab}}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Deskripsi Kerusakan</label>
                                                        <input type="text" name="deskripsikerusakan" class="form-control" readonly
                                                        value="{{ $kelompok3->deskripsikerusakan}}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Tanggal Pengajuan</label>
                                                        <input type="date" name="tglpengajuan" class="form-control" readonly
                                                        value="{{ $kelompok3->tglpengajuan}}">
                                                    </th>
                                                    </tr>

                                                    {{-- <tr>
                                                        <th><label for="">Pilih Teknisi</label>
                                                        <input type="text" name="tglpengajuan" class="form-control" readonly
                                                        value="{{ $kelompok3->name}}">
                                                    </th>
                                                    </tr> --}}

                                                    <tr>
                                                        <th><label for="">Status</label>
                                                        <input type="text" name="tglpengajuan" class="form-control" readonly
                                                        value="{{ $kelompok3->status}}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">No Telp</label>
                                                        <input type="text" name="notlp" class="form-control" readonly
                                                        value="{{ $kelompok3->notlp }}">
                                                    </th>
                                                    </tr>
                                                    <tr>
                                                        <th><button class="btn btn-primary btn-sm mb-3" type="submit">Proses Laporan</button>
                                                            <a class="btn btn-danger btn-sm mb-3" href="/detailkerusakan/{{$kelompok3->iddetail}}"> Kembali</a>
                                                        </th>
                                                    </tr>

                                                </table>
                                            @endforeach
                                        {{-- @endsection --}}
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            {{-- @include('Template.footer') --}}
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>

</html>
