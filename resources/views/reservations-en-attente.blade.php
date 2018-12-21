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
                <?php
                $reservations = App\Boat::all();
                ?>
                    @foreach($reservations as $reservation)
                    <tr scope="row">
                        <td>{{ $reservation->id }}</td>
                        <td>Miama Bitch</td>
                        <td>{{ $reservation->longueur }}</td>
                        <td>{{ $reservation->largeur }}</td>
                        <td>2000/01/01</td>
                        <td>2001/01/01</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection