@extends ('layouts.app')
@section ('content')
	<!-- <div class="row">
		<div class="col">
			{!! Form::model($user,
				[
					'method'=>'put',
					'route'=>['user.edit', $user],
					'class'=>'form'
				]) 
			!!}
			<div class ="form-group ">
				{!! Form::label('pseudo','Votre nom : :',
					['class'=>'control-label'])
				!!}
				{!! Form::text('pseudo', [
						'class'=>'form-control input-lg',
						'placeholder'=>'nom',
						'value"=>$user->name
					])
				!!}
			</div>
			<div class ="form-group ">
				{!! Form::label('pseudo','Votre nom : :',
					['class'=>'control-label'])
				!!}
				{!! Form::text('pseudo', [
						'class'=>'form-control input-lg',
						'placeholder'=>'nom',
						'value"=>$user->name
					])
				!!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>-->
@endsection
