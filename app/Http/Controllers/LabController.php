<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabController extends Controller
{
    //
    function lab(){
        $data = array(
            'lab' => DB::table('lab')
            // ->where('')
            ->get(),
            // ->get(),
        );

        return view('Dlab.index',$data);

        // $query = DB::table('lab')
        // ->join('pc', 'lab.idpc', '=', 'pc.idpc')
        // // ->select('pc','lab.namalab')
        // ->paginate(1);

        // $data = array(
        //     'pc' => $query,
        // );

        // return view('Dlab.index',$data);
    }

    function form()
    {
        $data   = [
            'aksi'      => url('submit')
        ];
        return view('Dlab.form', $data);
    }

    function submit(request $req)
    {
        $query  =DB::table('lab')->insert([
            'namalab'    => $req->namalab,
        ]);

        if($query)
        {
            // pnotify()->addSuccess('Data Berhasil Di Tambahkan');
            return redirect('dlab')->with('success', 'Data Berhasil Di Tambahkan');
        }

    }

    public function edit($id)
    {
        $query = DB::table('lab')
        ->where('idlab',$id)
        ->get();

        $data = array(
            'lab' => $query
        );
        return view('Dlab.edit',$data);

    }

    public function update(Request $request)
    {
        $query = DB::table('lab')->where('idlab', $request->idlab)->update([
            'idlab' => $request->idlab,
            'namalab' => $request->namalab,
        ]);

        if($query){
            return redirect('dlab')->with('success','Data Berhasil Di Ubah');
        }
    }

    function delete($id){
        $qry = DB::table('lab')->where('idlab',$id)->delete();
        if($qry){
            return redirect('dlab')->with('danger','Data Berhasil Di Hapus');
        }
    }

    function detail(){
        $query = DB::table('pc')
        ->join('lab', 'pc.idlab', '=', 'lab.idlab')
        // ->select('namapc')->where('pc', '1')
        ->paginate(2);

        $data = array(
            'pc' => $query,
        );

        return view('Dlab.detail',$data);
}
}
