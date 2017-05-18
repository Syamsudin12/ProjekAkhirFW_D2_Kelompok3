<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pembelian extends Model
{
	protected $table = 'detail_pembelian';

    public function pembelian()
   {
    return $this->belongsToMany(pembelian::class);
   }
   public function barang()
   {
    return $this->belongsToMany(barang::class);
   }
}
