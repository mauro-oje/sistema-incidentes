@extends('admin.plantilla.principal')
@section('titulo','Listado de Oficinas')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de oficinas</h2>
	<a href="{{route('oficina.crear')}}" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar Oficina</a> <a href="{{route('oficina.generar-pdf')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i></a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	<table class="table listado table-striped">
		<thead><div></div>
			<th>Oficinas</th>
			<th>Área</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($oficinas as $oficina)
				<tr>
					<td>{{$oficina->oficina}}</td>
					@if($oficina->area)
						<td>{{$oficina->area->nombre_area}}</td>
					@else
						<td>{{"Sin área"}}</td>
					@endif
					<td>
						<a href="{{route('admin.oficina_crud.edit',$oficina->id)}}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						<a href="{{route('oficina.borrar',$oficina->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('¿Esta seguro que desea borrar este registro?')"><span class="glyphicon glyphicon-trash"></span> Borrar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $oficinas->render() !!}
	
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
	          		"columnDefs":[{"orderable": false,"targets":2}]
	        });
	     });
    </script>
@endsection