<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\barang;

use App\kategori;

use App\detail_pembelian;

 use App\detail_transaksi;
 
class barangController extends Controller
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
    	$barang = new Barang();
    	$barang->nama_barang = 'paramex';
    	$barang->merek = 'obat keras';
    	$barang->stok = '25';
    	$barang->harga_beli = '2500';
    	$barang->harga_jual = '3000';
    	$barang->id_kategori = '1';
    	$barang->save();
    	return "data atas nama {$barang->nama_barang} berhasil di tambah";
    }
}
