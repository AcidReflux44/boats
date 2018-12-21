@extends('places.layout')

@section('premier')
    <div class="col-sm-3 my-3">
        <div class="card">

            {!! Form::open(['route' => 'places.store'], ['class' => 'form']) !!}

            <div class="card-header">
                Place 10
            </div>
            <div class="card-body">
                    <div class="row">
                    <div class="col">
                        {!! Form::text('longueur', null, ['class' => 'form-control', 'placeholder' => 'Longueur']) !!}
                    </div>
                    <div class="col">
                        {!! Form::text('largeur', null, ['class' => 'form-control', 'placeholder' => 'Largeur']) !!}
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col">
                        {!! Form::text('tarif', null, ['class' => 'form-control', 'placeholder' => 'Tarif']) !!}
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">

                <a href="/places" class="btn btn-block btn-warning">Annuler</a>
                {!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}

            </div>

            {!! Form::close() !!}
        </div>
    </div>@endsection