@extends('template')
@section('titre', 'Affecter à une place')
@section('contenu')
    {!! Form::open(['route' => 'reservations.update'], ['class' => 'form']) !!}
   <div class="row">
        <div class="col">
            {!! Form::label('place', ['class' => 'control-label']) !!}
        </div>
       <div class="col">
           {!! Form::select('place', array(1, 2, 3), ['class' => '']) !!}
       </div>
    </div>
    {!! Form::submit('Affecter') !!}
    <a href="{!! URL::route('reservations.index') !!}">Retour</a>
    {!! Form::close() !!}
@endsection