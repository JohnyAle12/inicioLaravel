@extends('layouts.principal')

<?php 
	$mensaje=Session::get('message');
?>

@if($mensaje=='store')


<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Usuario creado correctamente
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
			<td></td>
		</tbody>
		@endforeach
	</table>
	

@stop