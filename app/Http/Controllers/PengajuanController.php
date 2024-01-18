<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{
    //
    function pelapor(){
        $data = array(
            'pengajuan' => DB::table('pengajuan')
            // ->join('users', 'pengajuan.iduser', '=', 'users.id')
            // ->where('')
            ->get(),
        );

        return view('Dpengajuan.index',$data);
    }

    function pelaporp(){
        $data = array(
            'pengajuan' => DB::table('pengajuan')
            // ->where('')
            ->get(),
        );

        return view('Dpengajuan.pelapor',$data);
    }

    function form()
    {
        $getpc= DB::table('pc')->get();
        $getlab = DB::table('lab')->get();
        $data = array(
            'pc' => $getpc,
            'lab' => $getlab
        );
        return view('Dpengajuan.form', $data);
    }

    function submit(request $req)
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
            'deskripsikerusakan' => $req->deskripsikerusakan,
        ]);

        if($query)
        {
            return redirect('/')->with('success', 'PELAPORAN BERHASIL DIAJUKAN');
        }
    }

    function editp($id)
    {

        $query = DB::table('pengajuan')
        ->where('idpengajuan',$id)
        ->get();

        $data = array(
            'pengajuan' => $query
        );
        return view('Dpengajuan.edit',$data);
    }

    function tanggapil($id)
    {

        $query = DB::table('pengajuan')
        ->join('users', 'pengajuan.iduser', '=', 'users.id')
        // ->join('pengajuan', 'detailpengajuan.idpengajuan', '=', 'pengajuan.idpengajuan')
        ->where('idpengajuan',$id)
        ->get();

        $data = array(
            'pengajuan1' => $query
        );
        return view('Dkerusakan.editp',$data);
    }

function update(Request $request)
    {

        $query = DB::table('pengajuan')->where('idpengajuan', $request->idpengajuan)->update([
            'idpengajuan' => $request->idpengajuan,
            'nama_pengaju' => $request->nama_pengaju,
            'tglpengajuan' => $request->tglpengajuan,
            'notlp' => $request->notlp,
        ]);

        if($query){
            return redirect('/dpelapor')->with('success','Data Berhasil Di Ubah');
        }
    }
    function deletes($id){
        $qry = DB::table('pengajuan')->where('idpengajuan',$id)->delete();
        if($qry){
            return redirect('/dpelapor')->with('danger','Data Berhasil Di Hapus');
        }
    }
}
