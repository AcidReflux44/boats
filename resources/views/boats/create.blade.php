@extends ('template')
@section ('contenu')
	<div class ="row">
		<div class ="col">
			{!! Form::open(['route'=>'boats.store'],['class'=>'form']) !!}
			<div class ="form-group ">
				{!! Form::label('nom','Nom du bateau :',
					['class'=>'control-label'])
				!!}
				{!! Form::text('nom', null, [
						'class'=>'form-control input-lg',
						'placeholder'=>'mon bateau'
					])
				!!}
			</div>
			<div class ="form-group">
				{!! Form::label('modele','Marque et type : ',
					['class'=>'control-label'])
				!!}
				{!! Form::text('modele', null, [
						'class'=>'form-control input-lg',
						'placeholder'=>'modèle du bateau'
					])
				!!}
			</div>
			<div class ="form-group">
				{!! Form::label('longueur','Longueur : ',
					['class'=>'control-label'])
				!!}
				{!! Form::text('longueur', null, [
						'class'=>'form-control input-lg',
						'placeholder'=>'longueur du bateau'
					])
				!!}
			</div>
			<div class ="form-group">
				{!! Form::label('largeur','Largeur : ',
					['class'=>'control-label'])
				!!}
				{!! Form::text('largeur', null, [
						'class'=>'form-control input-lg',
						'placeholder'=>'largeur du bateau'
					])
				!!}
			</div>
			{!! Form::submit(); Form::close() !!}
		</div>
	</div>
@endsection