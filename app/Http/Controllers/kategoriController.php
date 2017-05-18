<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\kategori;

class kategoriController extends Controller
{
    public function awal()
   {
         return view('kategori.awal',['data'=>kategori::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('kategori.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_kategori'=>'required|unique:kategori|max:5',
               'nama_kategori'=>'required|max:30',
            ]);
         $kategori = new kategori();
         $kategori->nama_kategori = $input->nama_kategori;
         $informasi = $kategori->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('kategori')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $kategori= kategori::find($id);
         return view('kategori.edit')->with(array('kategori' =>$kategori));
   }
      public function lihat($id)
   {
         $kategori=kategori::find($id);
         return view('kategori.lihat')->with(array('kategori' =>$kategori));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_kategori'=>'required|max:30',
            ]);
         $kategori = kategori::find($id);
         $kategori->nama_kategori = $input->nama_kategori;
         $informasi = $kategori->save() ? 'berhasil update data':'gagal update data';
         return redirect('kategori')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $kategori= kategori::find($id);
         $informasi = $kategori->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('kategori')->with(['informasi'=>$informasi]);
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
    // 	$kategori = new kategori();
    // 	$kategori->nama_kategori = 'kapsul';
    // 	$kategori->save();
    // 	return "data atas nama {$kategori->nama_kategori} berhasil di tambah";
    // }
}
