<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_berita extends Model
{
	use SoftDeletes;

    
    protected $table='kategori_berita';
	    protected $fillable=['nama','users_id'];

	protected $casts=[
		'deleted_at' => 'datetime'
	];
}


 