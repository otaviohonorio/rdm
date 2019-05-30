<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostMapped extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'id',
		'address',
		'scanned',
		'dns',
		'os_match'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
		'created_at',
		'updated_at'
	];

	public function applications()
    {
        return $this->belongsToMany('App\Models\Application');
    }
}
