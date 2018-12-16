<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Boats extends Model {

    use SoftDeletes;

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
