<?php
/**
 * Variables définies:
 *  $reservation : reservation à modifier
 *  $places : liste des places compatibles avec $reservation
 *
**/


$selections = [];

foreach($places as $place)
    $selection[$place->id] = $place->id;
?>


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
            {!! Form::label('place', 'Place : ', ['class' => 'control-label']) !!}
        </div>
       <div class="col">
           {!! Form::select('place', array($selections), ['class' => '']) !!}
       </div>
    </div>

    {!! Form::submit('Affecter') !!}

    <a href="{!! URL::route('reservations.index') !!}">Retour</a>

    {!! Form::close() !!}

@endsection