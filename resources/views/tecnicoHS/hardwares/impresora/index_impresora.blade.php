@extends('admin.plantilla.principal')
@section('titulo','Listado de Impresoras')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Impresoras</h2>
	<hr>
	<a href="{{route('impresora.generar-pdf-hs')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Listado de Impresoras</a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	<table class="table listado table-striped">
		<thead>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Tipo</th>
			<th>Dirección IP</th>
			<th>¿Disponible?</th>
		</thead>
		<tbody>
			@foreach($impresoras as $impresora)
				<tr>
					<td>{{$impresora->marca_impresora}}</td>
					@if($impresora->modelo_impresora)
						<td>{{$impresora->modelo_impresora}}</td>
					@else
						<td><span class="label label-default">{{'Sin modelo'}}</span></td>
					@endif
					@if($impresora->tipo_impresora)
						<td>{{$impresora->tipo_impresora}}</td>
					@else
						<td><span class="label label-default">{{'Sin tipo'}}</span></td>
					@endif
					@if($impresora->ip)
						<td>{{$impresora->ip->direccion}}</td>
					@else
						<td><span class="label label-default">{{"Sin direccion IP"}}</span></td>
					@endif
					@if($impresora->disponible == "si")
						<td><span class="label label-success">{{$impresora->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$impresora->disponible}}</span></td>
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
