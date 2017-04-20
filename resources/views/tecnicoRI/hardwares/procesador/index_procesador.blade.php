@extends('admin.plantilla.principal')
@section('titulo','Listado de Procesadores')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Procesadores</h2>
	<hr>
	<a href="{{route('procesador.generar-pdf-ri')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Listado de Procesadores</a>
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
			}
        });
	</script>
@endsection
