@extends("template")
@section('titre', 'Liste des bateaux')
@section('css')
@endsection

@section('contenu')
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="col-md-12">
                <h5 >Ma Liste de Bâteaux</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Modèle</th>
                        <th scope="col">Longueur</th>
                        <th>Largeur</th>
                        <th>Propriétaires</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    use App\Boat;
                    $boats=Boat::all();
                    ?>
                    @foreach($boats as $boat)
                        <tr scope="row">
                            <td>{{ $boat->id }}</td>
                            <td><a href="{!! URL::route('boats.show', $boat) !!}">{{ $boat->nom }}</a></td>
                            <td>{{ $boat->modele }}</td>
                            <td>{{ $boat->longueur }}</td>
                            <td>{{ $boat->largeur }}</td>
                            <?php $users=$boat->users();
                            var_dump($users) ?>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection