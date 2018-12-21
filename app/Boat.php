<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Boat extends Model {

    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function place()
    {
        return $this->belongsToMany(Place::class);
    }

    protected $dates=[
		'created_at',
		'deleted_at',
		'started_at',
		'update_at'
	];
	
	protected $fillable = [
		'nom',
		'modele',
		'longueur',
		'largeur',
		'date_construction'
	];
}
