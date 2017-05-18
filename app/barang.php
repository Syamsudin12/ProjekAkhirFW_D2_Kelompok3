<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
	protected $table = 'barang';

    public function detail_pembelian()
   {
    return $this->belongsToMany(detail_pembelian::class);
   }
   public function kategori()
   {
    return $this->hasMany(kategori::class);
   }public function detail_transaksi()
   {
    return $this->belongsToMany(detail_transaksi::class);
   }
}
