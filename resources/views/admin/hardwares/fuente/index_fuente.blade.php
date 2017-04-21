@extends('admin.plantilla.principal')
@section('titulo','Listado de fuentes')
@section('contenido')

	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Fuentes</h2>
	<a href="{{route('fuente.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar fuente</a> <a href="{{route('fuente.generar-pdf')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	
	<table class="table listado table-striped">
		<thead>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Capacidad</th>
			<th>¿Disponible?</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($fuentes as $fuente)
				<tr>
					<td>{{$fuente->marca_fuente}}</td>
					<td>{{$fuente->modelo_fuente}}</td>
					<td>{{$fuente->capacidad_fuente}}</td>
					@if($fuente->disponible == "si")
						<td><span class="label label-success">{{$fuente->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$fuente->disponible}}</span></td>
					@endif
					<td>
						<a href="{{route('admin.fuente_crud.edit',$fuente->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="{{route('fuente.borrar',$fuente->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
			},
          		"columnDefs":[{"orderable": false,"targets":4}]
        });
	</script>
@endsection
