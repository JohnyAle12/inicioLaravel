@extends('layouts.principal')

<?php 
	$mensaje=Session::get('message');
?>

@if(Session::has('message'))


<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


@section('contenido')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('usuario.edit', $title = 'Actualizar', $parameters = $user->id, $attributes = ['class'=>'btn btn-success btn-sm']);!!}
			</td>
		</tbody>
		@endforeach
	</table>
	

@stop