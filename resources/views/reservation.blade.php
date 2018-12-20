@extends('template')
@section('titre', 'Demande de réservation')

@section('annuel')
    Taille:
@endsection

@section('periode')
    Début:
    Fin:
    Taille:
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

    <a class="btn btn-info" href="http://localhost/profil">Retour au profil</a>
@endsection
