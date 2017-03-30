<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    //
    protected $table = 'layanan';
	protected $fillable = ['foto_path','nama','detail_layanan'];
}
