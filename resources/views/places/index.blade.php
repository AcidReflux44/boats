@extends('template')
@section('titre', 'Liste des places')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-sm-3 my-3">
            <div class="h-100">
                <div class="btn btn-outline-success w-100 h-100 align-items-center d-flex justify-content-center">
                    <a class="fa fa-3x fa-plus"></a>
                </div>
            </div>
        </div>
        @foreach(range(1, 10) as $i)
            <div class="col-sm-3 my-3">
                <div class="card">
                    <div class="card-header">
                        Place 10
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Queen's Mary boat</h5>
                        <p class="card-text">Vide</p>
                        <a class="btn btn-primary">Editer</a>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="text-left">30x30m</div>
                        <div class="text-right">30€</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection