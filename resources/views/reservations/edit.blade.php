<?php
/**
 * Variables définies:
 *  $reservation : reservation à modifier
 *  $places : liste des places compatibles avec $reservation
 *
**


$places = Places::all();
$selections = [];

foreach($places as $place)
{
    if(DB::table('reservations')->whereColumn([
            ['date_debut', '>=', $reservation->date_debut],
            ['date_fin', '<=', $reservation->date_debut]
        ])->orWhereColumn([
            ['date_debut', '>=', $reservation->date_fin],
            ['date_fin', '<=', $reservation->date_fin]
        ]))
    {
        $place_id =
    }
}

foreach($places as $place)
    $selection[$place->id] = $place->id;
?>
*/

@extends('template')
@section('titre', 'Affecter à une place')
@section('contenu')
    {!! Form::model($reservation,
    [
        'method'=>'put',
        'route'=>['reservations.update', $reservation->id],
        'class'=>'form'
    ])
    !!}

   <div class="row">
        <div class="col">
            {!! Form::label('place_id', 'Place : ', ['class' => 'control-label']) !!}
        </div>
       <div class="col">
           {!! Form::select('place_id', array($selections), ['class' => '']) !!}
       </div>
    </div>

    {!! Form::submit('Affecter') !!}

    <a href="{!! URL::route('reservations.index') !!}">Retour</a>

    {!! Form::close() !!}

@endsection