<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
	protected $table = 'transaksi';

    public function konsumen()
   {
    return $this->hasMany(konsumen::class);
   }
   public function detail_transaksi()
   {
    return $this->belongsToMany(detail_transaksi::class);
   }
}
