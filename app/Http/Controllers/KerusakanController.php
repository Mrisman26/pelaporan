<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerusakanController extends Controller
{
    //
    function kerusakanadmin(){

        $query = DB::table('detailpengajuan')
        ->join('pengajuan', 'detailpengajuan.idpengajuan', '=', 'pengajuan.idpengajuan')
        ->join('pc', 'detailpengajuan.idpc', '=', 'pc.idpc')
        ->join('lab', 'pc.idlab', '=', 'lab.idlab')
        ->get();

        $data = array(
            'pc' => $query,
        );

        return view('Dkerusakan.index',$data);
    }

    function Kerusakanpelapor(){

        $query = DB::table('detailpengajuan')
        ->join('pengajuan', 'detailpengajuan.idpengajuan', '=', 'pengajuan.idpengajuan')
        ->join('pc', 'detailpengajuan.idpc', '=', 'pc.idpc')
        ->get();

        $data = array(
            'pc' => $query,
        );

        $data1 = array(
            'pengajuan' => $query,
        );

        return view('Dkerusakan.pelapor',$data, $data1);
    }

    function formdetail($id)
    {
        $query['data'] = DB::table('pc')
        ->join('lab', 'pc.idlab', '=', 'lab.idlab')
        ->get();

        $class = DB::table('pengajuan')
        ->where('idpengajuan',$id)
        ->get();

        $data = array(
            'pc' => $query,
            'pengajuan' => $class,
        );

        return view('Dkerusakan.detailp',$data);
    }

    public function getEmployees($id=0){

        // Fetch Employees by Departmentid
        // $employees['data'] = DB::table('pc')
        // ->orderBy('namapc', 'asc')
        // ->select('idpc', 'namapc')
        // ->where('idlab', $id)
        // ->get();

        $employees['data'] = DB::table('pc')
        ->orderBy('namapc', 'asc')
        ->select('idpc', 'namapc')
        ->where('lab', $id)
        ->get();


        return response()->json($employees);
    }

    function submit(request $req)
    {
        $query  =DB::table('pengajuan')->insert([
            'nama_pengaju'    => $req->nama_pengaju,
            'tglpengajuan'    => Carbon::now(),
            'notlp'           => $req->notlp,
        ]);

        if($query)
        {
            return redirect('detailp');
        }
    }
    function submitk(request $req)
    {
        $this->validate($req,[
            'bukti_foto'=> 'required|image|mimes:png,jpg,jpeg'
        ]);

        $bukti_foto = $req->file('bukti_foto');
        $bukti_foto->storeAs('/public/users', $bukti_foto->hashName());

        $query  =DB::table('pengajuan')->insert([
            'nama_pengaju'    => $req->nama_pengaju,
            'tglpengajuan'    => Carbon::now(),
            'notlp'           => $req->notlp,
            'bukti_foto'      => $bukti_foto->hashName(),
            'idpc'            => $req->namapc,
            'deskripsikerusakan' => $req->deksripsi,
        ]);

        if($query)
        {
            return redirect('/')->with('success', 'PELAPORAN BERHASIL DIAJUKAN');
        }else{
            echo "gagal";
        }
    }
    function tanggapiform($id)
    {
        $query = DB::table('detailpengajuan')
        ->join('pengajuan', 'detailpengajuan.idpengajuan', '=', 'pengajuan.idpengajuan')
        ->join('pc', 'detailpengajuan.idpc', '=', 'pc.idpc')
        ->join('lab', 'pc.idlab', '=', 'lab.idlab')

        ->where('iddetail', $id)
        ->get();

        $data = array(
            'pc' => $query,
        );

        return view('Dkerusakan.editk',$data);
    }

    function simpansensor(){
        DB::table('rfid')->update([
            'rfid'      => request()->nilaikartu,
            'status'    => request()->nilaistatus
        ]);
    }

    public function checkData($nuid)
    {
        // Perform the necessary logic to check the data
        $count = DB::table('rfid')
            ->where('rfid', $nuid)
            ->count();

        if ($count > 0) {
            return response()->json(['status' => 'AUTHORIZED']);
        } else {
            return response()->json(['status' => 'UNAUTHORIZED']);
        }
    }
}
