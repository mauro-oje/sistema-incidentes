<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Equipos</title>
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/css.css') }}">

		<style>
			 html,body {
            	height:100%;
        	}
		</style>

	</head>
	<body>
	<hr>
	<div id="header-top">
		<h3 class="centro" >Listado de Equipos</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>

	@foreach($equipos as $equipo)
		@if($equipo)
			<div>
				<label>Usuario:</label> 
					@if($equipo->user)
						{{$equipo->user->apellido}} {{$equipo->user->name}}
					@else
						{{"Sin usuario"}}
					@endif
			</div>
			<div>
				<label>Tipo:</label>
					{{$equipo->tipo}}
			</div>
			<div >
				<label>Nombre:</label>
					{{$equipo->nombre_equipo}}
			</div>
			<div>
				@if($equipo->placaMadre)
					<label>Placa Madre:</label>{{$equipo->placaMadre->marca_placa}} {{$equipo->placaMadre->modelo_placa}}
				@else
					<label>Placa Madre:</label>
					<div>
						<p >{{"Sin Placa madre"}}</p>
					</div>
				@endif
			</div>
			<div>
				@if($equipo->procesador)
					<label>Microprocesador:</label>
						{{$equipo->procesador->marca_procesador}} {{$equipo->procesador->modelo_procesador}}
				@else
					<label>Microprocesador:</label>
						{{"Sin Microprocesador"}}
				@endif
			</div>
			@for ($i = 0; $i < count($equipo->memoriasRam); $i++)
				<div>
					<label>Memoria ram (slot-{{$i+1}}):</label>
						{{$equipo->memoriasRam[$i]->marca_memoria}} {{$equipo->memoriasRam[$i]->tipo_memoria}} {{$equipo->memoriasRam[$i]->capacidad_memoria}} {{$equipo->memoriasRam[$i]->frecuencia}}
				</div>
			@endfor
			<div>
				@if($equipo->discosDuros)
					<label>Disco:</label>{{$equipo->discosDuros->tipo_disco}} {{$equipo->discosDuros->marca_disco}} {{$equipo->discosDuros->modelo_disco}} {{$equipo->discosDuros->capacidad_disco}} {{$equipo->discosDuros->interface}}
				@else
					<label>Disco:</label>
						{{"Sin Disco"}}
				@endif
			</div>
			<div>
				@if($equipo->so)
					<labe>Sistema Operativo:</label>
							{{$equipo->so}}
				@else
					<label>Sistema Operativo:</label>
						{{"Sin Sistema operativo"}}
				@endif
			</div>
			<div>
				@if($equipo->ips)
					<label>Dirección IP:</label>
						{{$equipo->ips->direccion}}
				@else
					<label>Dirección IP:</label>
						{{"Sin dirección IP"}}
				@endif
			</div>
			<div>
				@if($equipo->fuente)
					<label>Fuente:</label>
						{{$equipo->fuente->marca_fuente}} {{$equipo->fuente->modelo_fuente}}
				@else
					<label>Fuente:</label>
						{{"Sin Fuente"}}
					</div>
				@endif
			</div>
			<div>
				<label>Impresora:</label>
					@if($equipo->impresora)
						{{$equipo->impresora->marca_impresora}} {{$equipo->impresora->modelo_impresora}} {{$equipo->impresora->tipo_impresora}}
					@else
						{{"Sin impresora"}}
					@endif
				</div>
			</div>
			<div>
			@if($equipo->descripcion)
				<label>Descripción:</label>
					{{$equipo->descripcion}}
			@else
				<label>Descripción:</label>
					{{"Sin descripción"}}
			@endif
            <div class="clearfix"></div>
            <br>
		@else
			{{"No hay equipo"}}
		@endif
	@endforeach

	<div class="centro" id="footer">
		<p>Sistema gestion de incidentes</p>
	</div>
</body>

</html>