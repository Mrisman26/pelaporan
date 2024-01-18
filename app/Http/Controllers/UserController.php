<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function Duser(){
        $data = array(
            'users' => DB::table('users')
            // ->where('')
            ->get(),
        );

        return view('Duser.index',$data);
    }

    function form()
    {
        $data   = [
            'judul'     => 'Tambah Data Jurusan',
            'aksi'      => url('submit')
        ];
        return view('Duser.form', $data);
    }

    function submit(request $req)
    {
        $this->validate($req,[
            'foto'=> 'required|image|mimes:png,jpg,jpeg'
        ]);

        $foto = $req->file('foto');
        $foto->storeAs('/public/users', $foto->hashName());

        $query  =DB::table('users')->insert([
            'name'    => $req->name,
            'level'    => $req->level,
            'email' => $req->email,
            'password' => bcrypt(12345678),
            'notlp' => $req->notlp,
            'foto' =>$foto->hashName()
        ]);

        if($query)
        {
            return redirect('user')->with('success','Data Berhasil Ditambahkan');
        }

    }

    public function edit($id)
    {

        $query = DB::table('users')
        ->where('id',$id)
        ->get();

        $data = array(
            'judul' => 'Form Edit Data User',
            'users' => $query
        );
        return view('Duser.edit',$data);

    }

    public function update(Request $request)
    {

        $query = DB::table('users')->where('id', $request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => $request->password,
            'notlp' => $request->notlp,
            'foto' => $request->foto,

        ]);

        if($query){
            return redirect('user')->with('success','Data Berhasil Di Ubah');
        }
    }

    function delete($id){
        $qry = DB::table('users')->where('id',$id)->delete();
        if($qry){
            return redirect('user')->with('danger','Data Berhasil Di Hapus');
        }
    }

function search(Request $request)
{
    if($request->has('search')) {
        $data = array(
            'users' => DB::table('users')
            ->where('name', 'LIKE', '%'. $request->search.'%')
            ->get(),
        );
    }else{
    $data = DB::table('users')->all();
    }
    return view('Duser.index', ['users'=>$data]);
}


//Teknisi
    function teknisi(){
        $data = array(
            'users' => DB::table('users')
            ->where('level', 'teknisi')
            ->paginate(1),

        );

        return view('Dteknisi.index',$data);
    }

    function pelapor(){
        $data = array(
            'pengajuan' => DB::table('pengajuan')
            // ->where('')
            ->get(),
        );

        return view('Dteknisi.pelapor',$data);
    }

    function formt()
    {
        $data   = [
            'judul'     => 'Tambah Data Jurusan',
            'aksi'      => url('submit')
        ];
        return view('Dteknisi.form', $data);
    }

    function submitt(request $req)
    {

        $this->validate($req,[
            'foto'=> 'required|image|mimes:png,jpg,jpeg'
        ]);

        $foto = $req->file('foto');
        $foto->storeAs('/public/users', $foto->hashName());

        $query  =DB::table('users')->insert([
            'name'    => $req->name,
            'level'    => $req->level,
            'email' => $req->email,
            'password' => bcrypt(12345678),
            'notlp' => $req->notlp,
            'foto' =>$foto->hashName()
        ]);

        if($query)
        {
            return redirect('dteknisi')->with('success','Data Berhasil Ditambahkan');
        }

    }

    public function editt($id)
    {
        $query = DB::table('users')
        ->where('id',$id)
        ->get();

        $data = array(
            'judul' => 'Form Edit Data User',
            'users' => $query
        );
        return view('Dteknisi.edit',$data);

    }

    public function updatet(Request $request)
    {
        $query = DB::table('users')->where('id', $request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => $request->password,
            'notlp' => $request->notlp
        ]);

        if($query){
            return redirect('dteknisi')->with('success','Data Berhasil Di Ubah');
        }
    }

    function deletet($id){
        $qry = DB::table('users')->where('id',$id)->delete();
        if($qry){
            return redirect('dteknisi')->with('danger','Data Berhasil Di Hapus');
        }
    }
}
