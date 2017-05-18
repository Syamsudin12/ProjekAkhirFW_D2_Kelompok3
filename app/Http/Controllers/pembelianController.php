<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pembelian;

use App\karyawan;

use App\supplier;

class pembelianController extends Controller
{
    public function awal()
    {
    	return "berhasil";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pembelian = new pembelian();
    	$pembelian->nama_supplier = 'udin';
    	$pembelian->no_hp = '082153288611';
    	$pembelian->tgl_beli = '15-agustus-2017';
    	$pembelian->total_harga = '200000';
    	$pembelian->id_karyawan = '1';
    	$pembelian->id_supplier = '1';
    	$pembelian->save();
    	return "data atas nama {$pembelian->nama_supplier} berhasil di tambah";
    }
}
