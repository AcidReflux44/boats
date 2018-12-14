@extends ('layouts.app')
@section ('content')
	<div class="row">
		<p>C’est la facture n° </p>
		<div class="col">
			{!! Form::model($boat,
				[
					'method'=>'put',
					'route'=>['boats.update', $boat->id],
					'class'=>'form'
				]) 
			!!}
			<div class ="form-group ">
				{!! Form::label('id','ID du bateau :',
					['class'=>'control-label'])
				!!}
				{!! Form::text('id', null, [
						'class'=>'form-control input-lg',
						'placeholder'=>'mon bateau'
					])
				!!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection
