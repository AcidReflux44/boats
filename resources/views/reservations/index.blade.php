@extends('template')
@section('titre', 'Gérer les réservations en attente')
@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="my-3">Toutes les réservations en attente</h5>
                <a href="/profil" class="btn btn-info float-right mb-3">Retour au profil</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Utilisateur</th>
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
                                <td>{{ $reservation->getUser()->name }}</td>
                                <td>{{ $reservation->longueur }}</td>
                                <td>{{ $reservation->largeur }}</td>
                                <td>2000/01/01</td>
                                <td>2001/01/01</td>
                                <td>
                                    {!! Form::open (
                                        [
                                        'route' => ['reservations.destroy', $reservation],
                                        'method' => 'delete',
                                        'class' => 'form-inline'
                                        ])
                                    !!}
                                    {!! Form::submit ('Refuser' ,['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                    <a href="{{ URL::route('reservations.edit', $reservation) }}" class="btn btn-success">Affecter à une place</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection