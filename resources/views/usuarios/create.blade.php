@extends('layouts.principal')


@section('contenido')
	
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el correo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese el password'])!!}
		</div>
		{!!Form::submit('registrar',['class'=>'btn btn-success btn-sm'])!!}
	{!!Form::close()!!}
	

@stop