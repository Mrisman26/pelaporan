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
                                        <h3 class="card-title">Data User</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <form  action="{{ url('/updates') }}" method="post">
                                            @csrf
                                            @foreach ($users as $kelompok3 )
                                                <table class="table table-striped">
                                                    <tr>
                                                        <input type="hidden" name="id" placeholder="id"
                                                        value="{{ $kelompok3->id }}">
                                                    </tr>
                                                    <tr>
                                                        <th><label for="">Nama Teknisi</label>
                                                        <input type="text" name="name" class="form-control"
                                                        value="{{ $kelompok3->name }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Level</label>
                                                        <input type="text" name="level" class="form-control"
                                                        value="{{ $kelompok3->level }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                        value="{{ $kelompok3->email }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">Password</label>
                                                        <input type="text" name="password" class="form-control"
                                                        value="{{ $kelompok3->password }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><label for="">No Telpon</label>
                                                        <input type="text" name="notlp" class="form-control"
                                                        value="{{ $kelompok3->notlp }}">
                                                    </th>
                                                    <tr>
                                                        <th><label for="">Foto</label>
                                                            <input type="file" name="foto" class="form-control"
                                                            value="{{ $kelompok3->foto }}">
                                                    </th>
                                                    </tr>

                                                    <tr>
                                                        <th><button class="btn btn-primary btn-sm mb-3" type="submit">Edit Data</button>
                                                            <a class="btn btn-danger btn-sm mb-3" href="{{ url('/user') }}"> Kembali</a>
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
