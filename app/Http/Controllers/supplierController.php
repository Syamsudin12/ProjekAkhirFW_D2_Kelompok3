<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\supplier;

class supplierController extends Controller
{
    public function awal()
   {
         return view('supplier.awal',['data'=>supplier::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('supplier.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'nama_supplier'=>'required|unique:supplier|max:5',
               'nama_supplier'=>'required|max:30',
            ]);
         $supplier = new supplier;
         $supplier->nama_supplier = $input->nama_supplier;
         $supplier->no_hp = $input->no_hp;
         $supplier->alamat = $input->alamat;
         $supplier->email = $input->email;
         $informasi = $supplier->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('supplier')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $supplier= supplier::find($id);
         return view('supplier.edit')->with(array('supplier' =>$supplier));
   }
      public function lihat($id)
   {
         $supplier=supplier::find($id);
         return view('supplier.lihat')->with(array('supplier' =>$supplier));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'nama_supplier'=>'required|max:30',
            ]);
         $supplier = supplier::find($id);
         $supplier->nama_supplier = $input->nama_supplier;
         $supplier->no_hp = $input->no_hp;
         $supplier->alamat = $input->alamat;
         $supplier->email = $input->email;
         $informasi = $supplier->save() ? 'berhasil update data':'gagal update data';
         return redirect('supplier')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $supplier= supplier::find($id);
         $informasi = $supplier->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('supplier')->with(['informasi'=>$informasi]);
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
    // 	$supplier = new Supplier();
    // 	$supplier->nama_supplier = 'udin';
    // 	$supplier->no_hp = '082153288611';
    // 	$supplier->alamat = 'jl.mulawarman';
    // 	$supplier->email = 'udingagah@gmail.com';
    // 	$supplier->save();
    // 	return "data atas alamat {$supplier->nama_supplier} berhasil di tambah";
    // }
}
