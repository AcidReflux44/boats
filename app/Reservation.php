<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
//recup place

    use SoftDeletes;

    /*public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function boats()
    {
        return $this->belongsToMany(Boat::class);
    }*/

    public function getUser()
    {
        return User::find($this->user_id);
    }

    public function getPlace()
    {
        return Place::find($this->place_id);
    }

    protected $dates=[
		'created_at',
		'deleted_at',
		'started_at',
		'update_at'
	];
	
	protected $fillable = [
		'place_id',
		'user_id',
        'longueur',
        'largeur',
		'date_debut',
		'date_fin',
	];
}
