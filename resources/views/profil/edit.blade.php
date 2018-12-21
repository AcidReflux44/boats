{!! Form::open(['url' => 'save-profil', 'class' => 'form']) !!}
<div class="form-group w-50">
    {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
</div>
<div class="form-group w-50">
    {!! Form::email('email', Auth::user()->email, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
<div ="form-group">
    <a class="btn btn-info" href="/changePassword">Changer le mot de passe</a>
</div>