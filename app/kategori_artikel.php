<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_artikel extends Model
{
	use SoftDeletes;

    protected $table='kategori_artikel';
	protected $fillable=['users_id','nama'];

	protected $casts=[
		'deleted_at' => 'datetime'
	];
}
