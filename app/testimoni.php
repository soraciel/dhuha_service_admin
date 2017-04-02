<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    //
    protected $table = 'testimoni';
	protected $fillable = ['foto_path','nama','jabatan','isi_testimoni'];
}
