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
                        <a class="btn btn-primary btn-sm-1 ml-2" href="formuser"> Tambah Data User</a>
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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Data User</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="bg-secondary"> NO</th>
                                                <th class="bg-secondary"> Nama User</th>
                                                <th class="bg-secondary"> Level</th>
                                                <th class="bg-secondary"> No Telfon </th>
                                                <th class="bg-secondary"> Foto </th>
                                                <th class="bg-secondary"> Aksi </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if ($users)
                                            @foreach ($users as $kelompok3)
                                            <tr  class=" text-center">
                                                <td class="align-middle">
                                                    {{$loop->iteration}}

                                                <td class="align-middle">
                                                    {{$kelompok3->name}}
                                                </td>

                                                <td class="align-middle">
                                                    {{$kelompok3->level}}
                                                </td>

                                                <td class="align-middle">
                                                    {{ $kelompok3->notlp }}
                                                </td>

                                                <td><img src="{{ url("storage/users/".$kelompok3->foto) }}" width="70dp">

                                                <td>
                                                    <a class="btn btn-danger btn-sm ml-1 mt-4" href="/deletes/{{$kelompok3->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                            class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                        </svg> </a>


                                                    <a class="btn btn-primary btn-sm ml-1 mt-4" href="/edits/{{$kelompok3->id}}"> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                        </svg> </a>
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
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>

</html>
