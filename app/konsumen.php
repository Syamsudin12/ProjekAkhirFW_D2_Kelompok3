<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
	protected $table = 'konsumen';

    public function transaksi()
   {
    return $this->hasone(transaksi::class);
   }
}
