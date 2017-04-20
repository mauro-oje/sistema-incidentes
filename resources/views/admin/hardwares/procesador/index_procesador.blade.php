@extends('admin.plantilla.principal')
@section('titulo','Listado de Procesadores')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Procesadores</h2>
	<a href="{{route('procesador.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar procesador</a> <a href="{{route('procesador.generar-pdf')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	
	<table class="table listado table-striped">
		<thead><div></div>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Capacidad</th>
			<th>Nucelos</th>
			<th>Socket</th>
			<th>¿Disponible?</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($procesadores as $procesador)
				<tr>
					<td>{{$procesador->marca_procesador}}</td>
					<td>{{$procesador->modelo_procesador}}</td>
					<td>{{$procesador->capacidad_procesador}}</td>
					<td>{{$procesador->core_procesador}}</td>
					<td>{{$procesador->socket_procesador}}</td>
					@if($procesador->disponible == "si")
						<td><span class="label label-success">{{$procesador->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$procesador->disponible}}</span></td>
					@endif
					<td>
						<a href="{{route('admin.procesador_crud.edit',$procesador->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="{{route('procesador.borrar',$procesador->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
				url: '/Laravel/SistemaIncidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
				//url: '/sistema-incidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
			},
          		"columnDefs":[{"orderable": false,"targets":6}]
        });
	</script>
@endsection