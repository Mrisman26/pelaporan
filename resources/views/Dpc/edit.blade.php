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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-6">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!-- small box -->
                        <a class="btn btn-primary btn-sm-1" href="formuser"> Tambah Data User</a>
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


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data PC</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form  action="{{ url('/updatepc') }}" method="post">
                                            @csrf
                                            @foreach ($users as $kelompok3 )
                                                <table class="table table-striped">
                                                    <tr>
                                                        <input type="hidden" name="idpc"
                                                        value="{{ $kelompok3->idpc }}">
                                                    </tr>
                                                    <tr>
                                                        <th><label for="">Nama PC</label>
                                                        <input type="text" name="namapc" class="form-control"
                                                        value="{{ $kelompok3->namapc }}">
                                                    </th>
                                                    
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Deskripsi</label>
                                                        <input type="text" name="deskripsi" class="form-control"
                                                        value="{{ $kelompok3->deskripsi }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><button class="btn btn-primary btn-sm mb-3" type="submit">Edit Data</button>
                                                            <a class="btn btn-danger btn-sm mb-3" href="{{ url('/dpc') }}"> Kembali</a>
                                                        </th>
                                                    </tr>

                                                </table>
                                            @endforeach
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
