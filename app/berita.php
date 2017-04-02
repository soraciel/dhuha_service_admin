<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //
    protected $table = 'berita';
	protected $fillable = ['foto_path','tanggal','judul','isi'];
}
