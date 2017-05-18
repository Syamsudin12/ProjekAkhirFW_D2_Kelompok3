<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\karyawan;

use App\admin;

class karyawanController extends Controller
{
    public function awal()
   {
         return view('karyawan.awal',['data'=>karyawan::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('karyawan.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'username'=>'required|unique:karyawan|max:5',
               'username'=>'required|max:30',
               'password'=>'required|min:5',
            ]);
         $karyawan = new karyawan();
         $karyawan->username = $input->username;
         $karyawan->password = $input->password;
         $karyawan->nama = $input->nama;
         $karyawan->no_hp = $input->no_hp;
         $karyawan->id_admin = $input->id_admin;
         $informasi = $karyawan->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('karyawan')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $karyawan= Karyawan::find($id);
         return view('karyawan.edit')->with(array('karyawan' =>$karyawan));
   }
      public function lihat($id)
   {
         $karyawan=Karyawan::find($id);
         return view('karyawan.lihat')->with(array('karyawan' =>$karyawan));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'username'=>'required|max:30',
               'password'=>'required|min:5',
            ]);
         $karyawan = Karyawan::find($id);
         $karyawan->username = $input->username;
         $karyawan->password = $input->password;
         $karyawan->nama = $input->nama;
         $karyawan->no_hp = $input->no_hp;
         $karyawan->id_admin = $input->id_admin;
         $informasi = $karyawan->save() ? 'berhasil update data':'gagal update data';
         return redirect('karyawan')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $karyawan= karyawan::find($id);
         $informasi = $karyawan->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('karyawan')->with(['informasi'=>$informasi]);
   }
    // public function awal()
    // {
    // 	return "berhasil";
    // }
    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$karyawan = new karyawan();
    // 	$karyawan->username = 'mimin';
    // 	$karyawan->password = 'maman';
    // 	$karyawan->nama = 'mimin maman';
    // 	$karyawan->no_hp = '082153288611';
    // 	$karyawan->id_admin = '1';
    // 	$karyawan->save();
    // 	return "data atas nama {$karyawan->nama_karyawan} berhasil di tambah";
    // }
}
