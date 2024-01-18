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
                                    <h3 class="card-title">Data Pelapor</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <form action="{{ url('/submitke') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($pengajuan as $kelompok3 )
                                        <table class="table table-striped">
                                            <tr>
                                                <th><label for="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                    Nama Pelapor
                                                </label></th>
                                                <th><input type="text" name="nama_pengaju" required placeholder="Masukan Nama Pelapor" class="form-control"></th>
                                            </tr>


                                            <tr>
                                                <th>
                                                    <label for="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                        No Telfon
                                                    </label></th>
                                                    <th><input type="text" name="notlp" required placeholder="Masukan No Telpon" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-houses"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z" />
                                                        </svg>
                                                        Nama LAB
                                                    </label>
                                                </th>
                                                <th>
                                                    <select id='lab' name='namalab' class="form-control">
                                                        <option value='0'>-- PILIH LAB --</option>
                                                        @foreach($pc['data'] as $kerusakan)
                                                        <option value='{{ $kerusakan->idlab }}'>{{ $kerusakan->namalab }}</option>
                                                        @endforeach
                                                    </select>
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <label for="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            fill="currentColor" class="bi bi-pc-display"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z" />
                                                        </svg> NAMA PC
                                                    </label>
                                                </th>
                                                <th>
                                                    <select id='pc' name='namapc' class="form-control">
                                                        <option value='0'>-- NAMA PC --</option>
                                                    </select>
                                                </th>
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
                                                <th><label for="exampleInputemail" class="form-label">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                            height="25" fill="currentColor"
                                                            class="bi bi-person-workspace" viewBox="0 0 16 16">
                                                            <path
                                                                d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                            <path
                                                                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                                                        </svg>
                                                        Deskripsi Kerusakan</label>
                                                </th>
                                                <th>
                                                    <textarea type="text" name="foto" class="form-control" rows="5"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th><button class="btn btn-primary btn-sm mb-3" type="submit">
                                                    Laporkan Kerusakan</button>
                                                    <a class="btn btn-danger btn-sm mb-3"
                                                        href="{{ url('/datapelapor') }}"> Kembali</a>
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
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>

</html>
