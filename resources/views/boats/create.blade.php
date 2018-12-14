@extends ('layouts.app')
@section ('content')
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
			{!! Form::close() !!}
		</div>
	</div>
@endsection