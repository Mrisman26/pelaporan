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
                        {{-- <a class="btn btn-primary btn-sm-1 ml-2" href="formpc"> Tambah Data PC</a> --}}
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

    <!-- /.content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Detail Data Kerusakan</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped mx-auto">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="bg-secondary">
                                                    NO
                                                </th>
                                                <th class="bg-secondary">
                                                    Nama PC
                                                </th>
                                                <th class="bg-secondary">
                                                    Nama LAB
                                                </th>
                                                <th class="bg-secondary">
                                                    Deskripsi Kerusakan
                                                </th>
                                                <th class="bg-secondary">
                                                    Bukti Foto
                                                </th>

                                                <th class="bg-secondary">
                                                    Status
                                                </th>
                                                <th class="bg-secondary">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($pc)
                                            @foreach ($pc as $kelompok3)
                                            <tr class="text-center">
                                                <td class=" align-middle">
                                                    {{$loop->iteration}}
                                                </td>
                                                <td class=" align-middle">
                                                    {{$kelompok3->namapc}}
                                                </td>
                                                <td class=" align-middle">
                                                    {{$kelompok3->namalab}}
                                                </td>
                                                <td class=" align-middle">
                                                    {{$kelompok3->deskripsikerusakan}}
                                                </td>
                                                <td><img src="{{ url("storage/users/".$kelompok3->bukti_foto) }}" width="70dp">

                                                <td class=" align-middle">
                                                    <button class="btn btn-danger btn-sm mt-1 ml-1">{{ $kelompok3->status }}</button>
                                                </td>
                                                <td class=" align-middle">
                                                    <a type="button" class="btn btn-warning btn-sm ml-1 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    href="/tanggapi/{{$kelompok3->iddetail}}">
                                                        Tanggapi Laporan
                                                    </a>
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
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>

</html>
