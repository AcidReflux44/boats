@extends('template')
@section('titre', 'Réservations en attente')

@section('contenu')
    <div class="container">
        <h5 class="my-3">Réservations en attente</h5>
        <a href="/profil" class="btn btn-info float-right mb-3">Retour au profil</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Port</th>
                    <th>Longueur</th>
                    <th>Largeur</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr scope="row">
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->longueur }}</td>
                        <td>{{ $reservation->largeur }}</td>
                        <td>{{ $reservation->date_debut }}</td>
                        <td>{{ $reservation->date_fin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection