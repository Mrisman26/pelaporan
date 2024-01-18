<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PcController extends Controller
{
    //
    function pc(){

        $query = DB::table('pc')
        ->join('lab', 'pc.idlab', '=', 'lab.idlab')
        // ->select('pc','lab.namalab')
        ->get();

        $data = array(
            'pc' => $query,
        );

        return view('Dpc.index',$data);
    }

    function form()
    {
        $data   = [
            'datalab' =>DB::table('lab')->get(),
            'aksi'      => url('submit')
        ];
        return view('Dpc.form', $data);
    }

    function submit(request $req)
    {
        $query  =DB::table('pc')->insert([
            'idlab' => $req->lab,
            'namapc'    => $req->namapc,
            'deskripsi'    => $req->deskripsi,
        ]);

        if($query)
        {
            // pnotify()->addSuccess('Data Berhasil Di Tambahkan');
            return redirect('dpc')->with('success', 'Data Berhasil Di Tambahkan');
        }

    }

    public function edit($id)
    {
        $query = DB::table('pc')
        ->where('idpc',$id)
        ->get();

        $data = array(
            'users' => $query
        );
        return view('Dpc.edit',$data);

    }

    public function update(Request $request)
    {
        $query = DB::table('pc')->where('idpc', $request->idpc)->update([
            'idpc' => $request->idpc,
            'namapc' => $request->namapc,
            'deskripsi' => $request->deskripsi,
        ]);

        if($query){
            return redirect('dpc')->with('success','Data Berhasil Di Ubah');
        }
    }

    function delete($id){
        $qry = DB::table('pc')->where('idpc',$id)->delete();
        if($qry){
            return redirect('dpc')->with('danger','Data Berhasil Di Hapus');
        }
    }
}
