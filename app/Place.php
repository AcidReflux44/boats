<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	public function boat()
    {
        return $this->belongsToMany('App\Boat');
    }

    protected $fillable = [
        'longueur', 'largeur', 'tarif', 'nom-image'
    ];
}
