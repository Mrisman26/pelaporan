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
                                        <h3 class="card-title" value="" >Detail  LAB  </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <table class="table table-bordered text-center">
                                            <tr>
                                                <th class="bg-secondary">
                                                    ID LAB
                                                </th>
                                                <th class="bg-secondary">
                                                    Nama LAB
                                                </th>
                                                <th class="bg-secondary">
                                                    PC
                                                </th>

                                                @if ($pc)
                                                @foreach ($pc as $kelompok3)
                                            <tr>
                                                <td class="align-middle">
                                                    {{$kelompok3->idlab}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$kelompok3->namalab}}
                                                </td>
                                                <td class="align-middle">
                                                    {{$kelompok3->namapc}}
                                                </td>
                                            </tr>

                                            @endforeach
                                            @else
                                            Data Kosong
                                            @endif
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                                {{ $pc->onEachSide(1)->links() }}
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
