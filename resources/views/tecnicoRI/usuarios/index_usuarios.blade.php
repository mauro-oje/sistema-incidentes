@extends('admin.plantilla.principal')
@section('titulo','Listado de Usuarios')
@section('contenido')

	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Lista de usuarios</h2>
	<hr>
	<a href="{{route('incidente.generar.pdp.usuarios')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Listado de usuarios</a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	
	<table class="table listado table-striped table-condensed">
		<thead><div></div>
			<th>Apellido</th>
			<th>Nombre</th>
			<th>Correo eléctronico</th>
			<th>Tipo de usuario</th>
			<th>Oficina</th>
			<th>Área</th>
			<th>Ver</th>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->apellido}}</td>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					@if($usuario->tipo == 'administrador')
						<td><span class="label label-success">{{"Administrador"}}</span></td>
					@elseif($usuario->tipo == 'tecnicoHS')
						<td><span class="label label-primary">{{"Tecnico Hardware-Software"}}</span></td>
					@elseif($usuario->tipo == 'tecnicoRI')
						<td><span class="label label-primary">{{"Tecnico Red-Internet"}}</span></td>
					@else
						<td><span class="label label-default">{{"Miembro"}}</span></td>
					@endif
					@if($usuario->oficina)
						<td>{{$usuario->oficina->oficina}}</td>
					@else
						<td>{{'Sin oficina'}}</td>
					@endif
					@if($usuario->oficina and $usuario->oficina->area)
						<td>{{$usuario->oficina->area->nombre_area}}</td>
					@else
						<td>{{"Sin área"}}</td>
					@endif
					<td>
						@if($usuario->equipo)
							<a href="{{route('user.getEequipo',$usuario->equipo->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-television" aria-hidden="true"></i> Equipo</a>
						@else
							<button type="button" class="btn btn-primary btn-sm disabled"><i class="fa fa-television" aria-hidden="true"></i> Equipo</button>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('js')
	<script type="text/javascript">
        $('.listado').DataTable({
			language: {
				//url: '/Laravel/SistemaIncidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
				url: '/sistema-incidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
			}
        });
	</script>
@endsection
