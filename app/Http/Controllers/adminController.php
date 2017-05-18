<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\admin;

class adminController extends Controller
{
    public function awal()
   {
         return view('admin.awal',['data'=>admin::paginate(5)]);//batasan kalau mau semua gunakan all
   }
      public function tambah()
   {
         return view('admin.tambah');
   }
      public function simpan(Request $input)
   {
         $this->validate($input,[
               // 'username'=>'required|unique:admin|max:5',
               'username'=>'required|max:30',
               'password'=>'required|min:5',
            ]);
         $admin = new Admin;
         $admin->username = $input->username;
         $admin->password = $input->password;
         $admin->nama = $input->nama;
         $admin->level = $input->level;
         $informasi = $admin->save() ? 'berhasil simpan data':'gagal simpan data';
         return redirect('admin')->with(['informasi'=>$informasi]);
   }
      public function edit($id)
   {
         $admin= admin::find($id);
         return view('admin.edit')->with(array('admin' =>$admin));
   }
      public function lihat($id)
   {
         $admin=admin::find($id);
         return view('admin.lihat')->with(array('admin' =>$admin));
   }
      public function update($id, Request $input)
   {     $this->validate($input,[
               'username'=>'required|max:30',
               'password'=>'required|min:5',
            ]);
         $admin = Admin::find($id);
         $admin->username = $input->username;
         $admin->password = $input->password;
         $admin->nama = $input->nama;
         $admin->level = $input->level;
         $informasi = $admin->save() ? 'berhasil update data':'gagal update data';
         return redirect('admin')->with(['informasi'=>$informasi]);
   }
      public function hapus($id)
   {
         $admin= admin::find($id);
         $informasi = $admin->delete() ? 'berhasil hapus data':'gagal hapus data';
         return redirect('admin')->with(['informasi'=>$informasi]);
   }
   // public function awal()
   //  {
   //    return "berhasil";
   //  }
   //  public function tambah()
   //  {
   //    return $this->simpan();
   //  }
   //  public function simpan()
   //  {
   //    $admin = new Admin();
   //    $admin->username = 'mimi';
   //    $admin->password = 'mama';
   //    $admin->nama = 'mimi mama';
   //    $admin->level = 'admin';
   //    $admin->save();
   //    return "data atas nama {$admin->nama} berhasil di tambah";
   //  }
}
