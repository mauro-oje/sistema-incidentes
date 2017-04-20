@extends('admin.plantilla.principal')
@section('titulo','Listado de Placas madres')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Placas madres</h2>
	<a href="{{route('placa.madre.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar placa</a> <a href="{{route('placa.madre.generar-pdf')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
	
    <!-- Fin Formulario para el buscador de Tags-->
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	<hr>
	@include('flash::message')
	<table class="table listado table-striped">
		<thead><div></div>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Version</th>
			<th>¿Disponible?</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($placas_madres as $placa)
				<tr>
					<td>{{$placa->marca_placa}}</td>
					@if($placa->modelo_placa)
						<td>{{$placa->modelo_placa}}</td>
					@else
						<td>{{"Sin modelo"}}</td>
					@endif
					@if($placa->version)
						<td>{{$placa->version}}</td>
					@else
						<td>{{'Sin version'}}</td>
					@endif
					@if($placa->disponible == "si")
						<td><span class="label label-success">{{$placa->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$placa->disponible}}</span></td>
					@endif
					<td>
						<a href="{{route('placa.madre.editar',$placa->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                        <a href="{{route('placa.madre.borrar',$placa->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="modal fade" id="editar_modal_id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content" id="editar_modal"></div>
	    </div>
	</div>

@endsection
@section('js')
	<script type="text/javascript">
        $('.listado').DataTable({
			language: {
				url: '/Laravel/SistemaIncidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
				//url: '/sistema-incidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
			},
          		"columnDefs":[{"orderable": false,"targets":4}]
        });
	</script>
@endsection
