@extends('admin.plantilla.principal')
@section('titulo','Listado de memorias')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Memorias RAM</h2>
	<hr>
	<a href="{{route('memoria.generar-pdf-hs')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Listado de Memorias Ram</a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	<table class="table listado table-striped">
		<thead><div></div>

			<th>Tipo</th>
			<th>Marca</th>
			<th>Capacidad/Unidad</th>
			<th>Frecuencia</th>
			<th>¿Disponible?</th>
		</thead>
		<tbody>
			@foreach($memorias as $memoria)
				<tr>
					<td>{{$memoria->tipo_memoria}}</td>
					<td>{{$memoria->marca_memoria}}</td>
					<td>{{$memoria->capacidad_memoria}}</td>
					<td>{{$memoria->frecuencia}}</td>
					@if($memoria->disponible == "si")
						<td><span class="label label-success">{{$memoria->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$memoria->disponible}}</span></td>
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
				//url: '/Laravel/SistemaIncidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
				url: '/sistema-incidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
			}
        });
	</script>
@endsection
