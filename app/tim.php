<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    //
    protected $table = 'tim';
	protected $fillable = ['foto_path','nama','jabatan'];
}
