<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_pengumuman extends Model
{
    use SoftDeletes;

    protected $table='kategori_pengumuman';
	protected $fillable=['nama','users_id',];

	protected $casts=[
		'deleted_at' => 'datetime'
	];
}
