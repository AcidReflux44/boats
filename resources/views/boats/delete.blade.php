@extends ('layouts.app')
@section ('content')
	{!! Form::open (
		[
		'route'=>['boats.destroy',$boat],
		'method'=>'delete'
		]) 
	!!}
	{!! Form::submit ('Effacer bateau' ,['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
@endsection