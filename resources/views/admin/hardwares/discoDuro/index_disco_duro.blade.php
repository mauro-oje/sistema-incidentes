@extends('admin.plantilla.principal')
@section('titulo','Listado de Discos')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Discos duros</h2>
	<a href="{{route('disco.duro.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar disco</a> <a href="{{route('disco.duro.generar-pdf')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	<table class="table listado table-striped">
		<thead><div></div>
			<th>Tipo</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Capacidad/Unidad</th>
			<th>Interface</th>
			<th>¿Disponible?</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($discos as $disco)
				<tr>
					<td>{{$disco->tipo_disco}}</td>
					<td>{{$disco->marca_disco}}</td>
					<td>{{$disco->modelo_disco}}</td>
					<td>{{$disco->capacidad_disco}}</td>
					<td>{{$disco->interface}}</td>
					@if($disco->disponible == "si")
						<td><span class="label label-success">{{$disco->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$disco->disponible}}</span></td>
					@endif
					<td>
						<a href="{{route('admin.disco-duro_crud.edit',$disco->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="{{route('disco.duro.borrar',$disco->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
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
          		"columnDefs":[{"orderable": false,"targets":6}]
        });
	</script>
@endsection