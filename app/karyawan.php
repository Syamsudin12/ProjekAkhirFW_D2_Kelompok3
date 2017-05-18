<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
	protected $table = 'karyawan';

    public function admin()
   {
    return $this->belongsTo(admin::class);
   }
   
}
