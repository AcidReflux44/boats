@extends('template')
@section('contenu')
    <div>
        Nom du bâteau: {{ $boat->nom }}
    </div>
    <div>
        Modèle du bâteau: {{ $boat->modele }}
    </div>
    <div>
        Dimensions du bâteau: {{ $boat->longueur }}x{{ $boat->largeur }}
    </div>

    {!! Form::open([
        'route' => ['boats.destroy', $boat],
        'method' => 'delete'
    ]) !!}
    {!! Form::submit('Supprimer le bâteau', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection