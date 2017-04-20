@extends('admin.plantilla.principal')
@section('titulo','Listado de Usuarios')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Lista de usuarios</h2>
	<hr>
	<a href="{{route('user.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar Usuario</a> <a href="{{route('incidente.generar.pdp.usuarios')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
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
			<th>Acciones</th>
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
						<a href="{{route('admin.usuarios_crud.edit',$usuario->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="{{route('usuario.borrar',$usuario->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
	{!! $usuarios->render() !!}
	<script src="{{ asset('plugins/bootstrap/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/dataTables.bootstrap.min.js') }}"></script>
	<script type="text/javascript">
	      $(document).ready(function(){
	        $('.listado').DataTable({
				language:{
				    "sProcessing":     "Procesando...",
				    "sLengthMenu":     "Mostrar _MENU_ registros",
				    "sZeroRecords":    "No se encontraron resultados",
				    "sEmptyTable":     "Ningún dato disponible en esta tabla",
				    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				    "sInfoPostFix":    "",
				    "sSearch":         "Buscar:",
				    "sUrl":            "",
				    "sInfoThousands":  ",",
				    "sLoadingRecords": "Cargando...",
				    "oPaginate": {
				        "sFirst":    "Primero",
				        "sLast":     "Último",
				        "sNext":     "Siguiente",
				        "sPrevious": "Anterior"
				    },
				    "oAria": {
				        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			},
	          		"columnDefs":[{"orderable": false,"targets":6}]
	        });
	     });
    </script>

@endsection