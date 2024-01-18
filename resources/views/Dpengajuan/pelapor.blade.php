<!DOCTYPE html>

<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar1')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar1')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-6">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div> --}}
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- small box -->
                        {{-- <a class="btn btn-primary btn-sm-1 ml-2" href="formuser"> Tambah Data User</a> --}}
                        {{-- <button class="btn btn-primary btn-sm mb-3" href="formcalon">Tambah Data</button> --}}
                        <!-- ./col -->

                    </div>
                </div>
                <br>
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <!-- small box -->
                            <a class="btn btn-primary btn-sm-1 ml-2" href="formp"> Tambah Data Pelapor</a>
                            {{-- <button class="btn btn-primary btn-sm mb-3" href="formcalon">Tambah Data</button> --}}
                            <!-- ./col -->

                        </div>
                    </div>
                    <br>
                    <!-- /.content-header -->
                    @if (session()->has('success'))
                    <div class=" alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                </section>

    <!-- /.content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Data Pelapor</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped align-center">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="bg-secondary"> NO</th>
                                                <th class="bg-secondary"> Nama Pelapor</th>
                                                <th class="bg-secondary"> No Telpon </th>
                                                <th class="bg-secondary"> Tanggal Pelaporan</th>
                                                <th class="bg-secondary"> Isi Detail Kerusakan </th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            @if ($pengajuan)
                                            @foreach ($pengajuan as $kelompok3)
                                            <tr class="text-center">
                                                <td class=" align-middle">
                                                    {{$loop->iteration}}

                                                <td class=" align-middle">
                                                    {{$kelompok3->nama_pengaju}}
                                                </td>

                                                <td class=" align-middle">
                                                    {{ $kelompok3->notlp }}
                                                </td>

                                                <td class=" align-middle">
                                                    {{$kelompok3->tglpengajuan}}
                                                </td>

                                                <td>
                                                    {{-- <a class="btn btn-warning btn-sm mt-1" href="/detailp/{{$kelompok3->idpengajuan}}"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                        class="bi bi-eye-slash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                        <path
                                                            d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                        <path
                                                            d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                                    </svg> </a> --}}
                                                    <a class="btn btn-warning btn-sm ml-1 mt-1" href="/formdetailp/{{$kelompok3->idpengajuan}}"> Isi Detail Kerusakan </a>
                                                    <a class="btn btn-info btn-sm ml-1 mt-1" href="/dkerusakan/{{$kelompok3->idpengajuan}}"> Cek Status Laporan </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            Data Kosong
                                            @endif
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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
