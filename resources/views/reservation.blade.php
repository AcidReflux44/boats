@extends('template')
@section('titre', 'Demande de réservation')

@section('annuel')	<div class ="row">
    <div class ="col">
        {!! Form::open(['route' => 'reservations.create'], ['class' => 'form']) !!}
        <div class ="form-group">
            {!! Form::label('longueur','Longueur :',
                ['class'=>'control-label'])
            !!}
            {!! Form::text('longueur', null, [
                    'class'=>'form-control input-lg',
                    'placeholder'=>'Longueur'
                ])
            !!}
        </div>
        <div class ="form-group">
            {!! Form::label('largeur','Largeur :',
                ['class' => 'control-label'])
            !!}
            {!! Form::text('largeur', null, [
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Largeur'
                ])
            !!}
        </div>
        <div class ="form-group">
            {!! Form::label('date_debut','À partir du :',
                ['class' => 'control-label'])
            !!}
            {!! Form::date('date_debut', date("Y-m-d"), [
                    'class' => 'form-control input-lg'
                ])
            !!}
        </div>
        <input type="hidden" name="date_fin" value="{!! date("Y-m-d", strtotime("+1 year")) !!}">
        {!! Form::submit(); Form::close() !!}
        </div>
    </div>
@endsection

@section('periode')
    <div class ="col">
        {!! Form::open(['route' => 'reservations.create'], ['class' => 'form']) !!}
        <div class ="form-group">
            {!! Form::label('longueur','Longueur :',
                ['class'=>'control-label'])
            !!}
            {!! Form::text('longueur', null, [
                    'class'=>'form-control input-lg',
                    'placeholder'=>'Longueur'
                ])
            !!}
        </div>
        <div class ="form-group">
            {!! Form::label('largeur','Largeur :',
                ['class' => 'control-label'])
            !!}
            {!! Form::text('largeur', null, [
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Largeur'
                ])
            !!}
        </div>
        <div class ="form-group">
            {!! Form::label('date_debut','À partir du :',
                ['class' => 'control-label'])
            !!}
            {!! Form::date('date_debut', date("Y-m-d"), [
                    'class' => 'form-control input-lg'
                ])
            !!}
        </div>
        <div class ="form-group">
            {!! Form::label('date_fin','Date fin :',
                ['class' => 'control-label'])
            !!}
            {!! Form::date('date_fin', date("Y-m-d", strtotime("+1 month")), [
                    'class' => 'form-control input-lg'
                ])
            !!}
        </div>
        {!! Form::submit(); Form::close() !!}
        </div>
    </div>
@endsection

@section('selection')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <a href="reservation?type=annuel" class="btn btn-outline-secondary  btn-lg btn-block">Réservation à l'année</a>
            </div>
            <div class="col">
                <a href="reservation?type=periode" class="btn btn-outline-primary btn-lg btn-block">Réservation sur une période spécifique</a>
            </div>
        </div>
    </div>
@endsection

@section('contenu')
    @switch(Request::get('type'))
        @case('annuel')
            @yield('annuel')
        @break

        @case('periode')
            @yield('periode')
        @break

        @default
            @yield('selection')
    @endswitch
    <div class=""form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <a class="btn btn-info" href="http://localhost/profil">Retour au profil</a>
        </div>
    </div>
@endsection
