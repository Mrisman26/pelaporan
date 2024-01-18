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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1 class="m-0">Starter Page</h1> --}}
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title">Form Tambah Data User</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body ">
                                    <table class="table table-bordered">
                                        <form action="{{ url('submits') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <table class="table table-hover ">

                                                <tr>
                                                    <th><label for="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                                                <path
                                                                    d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                            </svg>
                                                            Nama User
                                                        </label></th>
                                                    <th><input type="text" name="name" required
                                                            placeholder="Masukan Nama User" class="form-control"></th>
                                                </tr>

                                                {{-- <tr>
                                                    <th><label for="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                                        </svg>
                                                        Level
                                                    </label></th>
                                                    <th><input type="text" name="level" required placeholder="Masukan Level User" class="form-control"></th>
                                                </tr> --}}

                                                <tr>
                                                    <th>
                                                        <label for="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                                            </svg>
                                                            Level
                                                        </label></th>
                                                    <th>
                                                        <select name="level" id="" class="form-control">
                                                            <option value="">-- pilih PC --</option>
                                                            <option value="SUPERADMIN">SUPERADMIN</option>
                                                            <option value="ADMIN">ADMIN</option>
                                                            <option value="TEKNISI">TEKNISI</option>
                                                        </select>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <th><label for="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" fill="currentColor"
                                                                class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                                                                <path
                                                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                                            </svg>
                                                            Email
                                                        </label></th>
                                                    <th><input type="emial" name="email" required
                                                            placeholder="Masukan Email" class="form-control"></th>
                                                </tr>
                                                <tr>
                                                    {{-- <th><label for="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pass-fill" viewBox="0 0 16 16">
                                                            <path d="M10 0a2 2 0 1 1-4 0H3.5A1.5 1.5 0 0 0 2 1.5v13A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0H10ZM4.5 5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1Zm0 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1Z"/>
                                                        </svg>
                                                        Password
                                                    </label></th> --}}
                                                    <input type="hidden" name="password" required="12345678">
                                                </tr>

                                                <tr>
                                                    <th>
                                                        <label for="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-telephone-forward-fill"
                                                                viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                                                            </svg>
                                                            No Telfon
                                                        </label></th>
                                                    <th><input type="text" name="notlp" required
                                                            placeholder="Masukan No Telfon" class="form-control"></th>
                                                </tr>

                                                <tr>
                                                    <th><label for="exampleInputemail" class="form-label">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                height="25" fill="currentColor"
                                                                class="bi bi-person-workspace" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                <path
                                                                    d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                                                            </svg>
                                                            Masukan Foto</label></th>
                                                    <th><input type="file" name="foto" class="form-control"></th>
                                                </tr>

                                                <tr>
                                                    <th><button class="btn btn-primary btn-sm mb-3" type="submit">Tambah
                                                            Data</button>
                                                        <a class="btn btn-danger btn-sm mb-3" href="{{ url('/user') }}">
                                                            Kembali</a>
                                                    </th>
                                                </tr>
                                            </table>
                                        </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('Template.script')
</body>

</html>
