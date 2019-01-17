@extends('layouts.principal')


@section('contenido')
	
	{!!Form::model($user, ['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}
		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el correo'])!!}
		</div>
		{!!Form::submit('Editar',['class'=>'btn btn-success btn-sm'])!!}
	{!!Form::close()!!}
	

@stop