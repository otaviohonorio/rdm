<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'id',
		'name',
		'port',
		'protocol',
		'product'
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

	public function hosts()
    {
        return $this->belongsToMany('App\Models\HostMapped');
    }
}
