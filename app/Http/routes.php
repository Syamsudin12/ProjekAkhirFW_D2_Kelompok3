<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin','adminController@awal');
Route::get('admin/tambah','adminController@tambah');
Route::get('admin/{admin}','adminController@lihat');
Route::post('admin/simpan','adminController@simpan');
Route::get('admin/edit/{admin}','adminController@edit');
Route::post('admin/edit/{admin}','adminController@update');
Route::get('admin/hapus/{admin}','adminController@hapus');

Route::get('supplierkonsumen','supplierController@awal');
Route::get('supplier/tambah','supplierController@tambah');
Route::get('supplier/{supplier}','supplierController@lihat');
Route::post('supplier/simpan','supplierController@simpan');
Route::get('supplier/edit/{supplier}','supplierController@edit');
Route::post('supplier/edit/{supplier}','supplierController@update');
Route::get('supplier/hapus/{supplier}','supplierController@hapus');

Route::get('konsumen','konsumenController@awal');
Route::get('konsumen/tambah','konsumenController@tambah');
Route::get('konsumen/{konsumen}','konsumenController@lihat');
Route::post('konsumen/simpan','konsumenController@simpan');
Route::get('konsumen/edit/{konsumen}','konsumenController@edit');
Route::post('konsumen/edit/{konsumen}','konsumenController@update');
Route::get('konsumen/hapus/{konsumen}','konsumenController@hapus');

Route::get('barang','barangController@awal');
Route::get('barang/tambah','barangController@tambah');
Route::get('barang/{barang}','barangController@lihat');
Route::post('barang/simpan','barangController@simpan');
Route::get('barang/edit/{barang}','barangController@edit');
Route::post('barang/edit/{barang}','barangController@update');
Route::get('barang/hapus/{barang}','barangController@hapus');

Route::get('kategori','kategoriController@awal');
Route::get('kategori/tambah','kategoriController@tambah');
Route::get('kategori/{kategori}','kategoriController@lihat');
Route::post('kategori/simpan','kategoriController@simpan');
Route::get('kategori/edit/{kategori}','kategoriController@edit');
Route::post('kategori/edit/{kategori}','kategoriController@update');
Route::get('kategori/hapus/{kategori}','kategoriController@hapus');

Route::get('karyawan','karyawanController@awal');
Route::get('karyawan/tambah','karyawanController@tambah');
Route::get('karyawan/{karyawan}','karyawanController@lihat');
Route::post('karyawan/simpan','karyawanController@simpan');
Route::get('karyawan/edit/{karyawan}','karyawanController@edit');
Route::post('karyawan/edit/{karyawan}','karyawanController@update');
Route::get('karyawan/hapus/{karyawan}','karyawanController@hapus');

Route::get('pembelian','pembelianController@awal');
Route::get('pembelian/tambah','pembelianController@tambah');
Route::get('pembelian/{pembelian}','pembelianController@lihat');
Route::post('pembelian/simpan','pembelianController@simpan');
Route::get('pembelian/edit/{pembelian}','pembelianController@edit');
Route::post('pembelian/edit/{pembelian}','pembelianController@update');
Route::get('pembelian/hapus/{pembelian}','pembelianController@hapus');

Route::get('transaksi','transaksiController@awal');
Route::get('transaksi/tambah','transaksiController@tambah');
Route::get('transaksi/{transaksi}','transaksiController@lihat');
Route::post('transaksi/simpan','transaksiController@simpan');
Route::get('transaksi/edit/{transaksi}','transaksiController@edit');
Route::post('transaksi/edit/{transaksi}','transaksiController@update');
Route::get('transaksi/hapus/{transaksi}','transaksiController@hapus');

Route::get('detail_pembelian','detail_pembelianController@awal');
Route::get('detail_pembelian/tambah','detail_pembelianController@tambah');
Route::get('detail_pembelian/{detail_pembelian}','detail_pembelianController@lihat');
Route::post('detail_pembelian/simpan','detail_pembelianController@simpan');
Route::get('detail_pembelian/edit/{detail_pembelian}','detail_pembelianController@edit');
Route::post('detail_pembelian/edit/{detail_pembelian}','detail_pembelianController@update');
Route::get('detail_pembelian/hapus/{detail_pembelian}','detail_pembelianController@hapus');

Route::get('detail_transaksi','detail_transaksiController@awal');
Route::get('detail_transaksi/tambah','detail_transaksiController@tambah');
Route::get('detail_transaksi/{detail_transaksi}','detail_transaksiController@lihat');
Route::post('detail_transaksi/simpan','detail_transaksiController@simpan');
Route::get('detail_transaksi/edit/{detail_transaksi}','detail_transaksiController@edit');
Route::post('detail_transaksi/edit/{detail_transaksi}','detail_transaksiController@update');
Route::get('detail_transaksi/hapus/{detail_transaksi}','detail_transaksiController@hapus');


Route::get('/', function () {
    return view('welcome');
});