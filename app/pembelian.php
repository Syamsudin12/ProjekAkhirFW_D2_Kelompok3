<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    protected $table = 'pembelian';
    
    public function supplier()
   {
    return $this->hasMany(supplier::class);
   }
   public function karyawan()
   {
    return $this->hasMany(karyawan::class);
   }
   public function detail_pembelian()
   {
    return $this->belongsToMany(detail_pembelian::class);
   }
}
