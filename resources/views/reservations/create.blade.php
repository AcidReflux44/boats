@extends ('template')
@section ('contenu')
	<div class ="row">
		<div class ="col">
			{!! Form::open(['route'=>'reservations.store'],['class'=>'form']) !!}
			<div class ="form-group">
				{!! Form::label('longueur','Longueur :',
                    ['class'=>'control-label'])
                !!}
				{!! Form::text('longueur', null, [
                        'class'=>'form-control input-lg',
                        'placeholder'=>'Longueur'
                    ])
                !!}
			</div>
			<div class ="form-group">
				{!! Form::label('largeur','Largeur :',
                    ['class' => 'control-label'])
                !!}
				{!! Form::text('largeur', null, [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Largeur'
                    ])
                !!}
			</div>
			<div class ="form-group">
				{!! Form::label('date_debut','À partir du :',
                    ['class' => 'control-label'])
                !!}
				{!! Form::date('date_debut', date("Y-m-d"), [
                        'class' => 'form-control input-lg'
                    ])
                !!}
			</div>
			<div class ="form-group">
				{!! Form::label('date_fin','Date fin :',
                    ['class' => 'control-label'])
                !!}
				{!! Form::date('date_fin', date("Y-m-d", strtotime("+1 month")), [
                        'class' => 'form-control input-lg'
                    ])
                !!}
			</div>
			{!! Form::submit(); Form::close() !!}
		</div>
	</div>
@endsection