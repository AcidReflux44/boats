@extends('template')
@section('titre', 'Liste des places')

@section('contenu')
    <div class="container">
        <div class="row">
            @yield('premier')
            @foreach($places as $place)
                <div class="col-sm-3 my-3">
                    <div class="card">
                        <div class="card-header">
                            Place {{ $place->id }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Queen's Mary boat</h5>
                            <p class="card-text">Vide</p>
                            <a class="btn btn-primary">Editer</a>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="text-left">{{ $place->longueur }}x{{ $place->largeur }}m</div>
                            <div class="text-right">{{ $place->tarif }}€</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection