<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\konsumen;

class konsumenController extends Controller
{
    public function awal()
   {
         return view('konsumen.awal',['data'=>konsumen::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('konsumen.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_konsumen'=>'required|unique:konsumen|max:5',
               'nama_konsumen'=>'required|max:30',
            ]);
         $konsumen = new konsumen();
         $konsumen->nama_konsumen = $input->nama_konsumen;
         $konsumen->alamat = $input->alamat;
         $konsumen->email = $input->email;
         $informasi = $konsumen->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('konsumen')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $konsumen= konsumen::find($id);
         return view('konsumen.edit')->with(array('konsumen' =>$konsumen));
   }
      public function lihat($id)
   {
         $konsumen=konsumen::find($id);
         return view('konsumen.lihat')->with(array('konsumen' =>$konsumen));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_konsumen'=>'required|max:30',
            ]);
         $konsumen = konsumen::find($id);
         $konsumen->nama_konsumen = $input->nama_konsumen;
         $konsumen->alamat = $input->alamat;
         $konsumen->email = $input->email;
         $informasi = $konsumen->save() ? 'berhasil update data':'gagal update data';
         return redirect('konsumen')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $konsumen= konsumen::find($id);
         $informasi = $konsumen->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('konsumen')->with(['informasi'=>$informasi]);
   }
}
