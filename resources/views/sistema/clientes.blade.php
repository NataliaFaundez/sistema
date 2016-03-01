@extends("home")

@section('clientes')

<hr>
<div class="col-sm-9">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" action="/sistema/clientes/save" method="POST">
				{{ csrf_field() }}     
				<div class="panel">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Crear Clientes</h4>
							</div>
						</div>

						<div class="panel-body">
							<form class="form form-vertical" >

								<div class="control-group">
									<label>Nombre o Razon Social</label>						
									<div class="controls">
										<input type="text" name ='nombre' class="form-control">
									</div>	
								</div>			

								<div class="control-group">
									<label>Rut</label>						
									<div class="controls">
										<input type="text" name ='rut' class="form-control">
									</div>	
								</div>	

								<div class="control-group">						
									<div class="controls">
										<button type="submit" class="btn btn-primary">
											Ingresar
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>                       
				</div>
			@if ( isset($errors) )
			@if (count($errors) > 0)

			<div class="row">
				<div class="col-md-offset-3 col-md-6">
				    <div class="alert alert-info">
				        <ul>
				            @foreach ($errors as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
			
			    </div>
			</div>
			@endif
			@endif                
		</div>

		<div class="col-md-6">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
			</div>
			<BR>  
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>Razon Social o Nombre</th>
							<th>Rut</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($clientes as $cliente)
						<tr>								                      
	                        <td> {{ $cliente-> nombre }} </td>  
	                        <td> {{ $cliente -> rut }} </td>  		
							<td>
								<a class="btn btn-warning" href="/sistema/clientes/editar/{{$cliente->id}}">
									Editar
								<span class="glyphicon glyphicon-pencil"></span>
								</a>
								<a class="btn btn-danger" href="/sistema/clientes/eliminar/{{$cliente->id}}">
									Eliminar 
								<span class="glyphicon glyphicon-remove"></span>
								</a>	 			
							</td>										                               
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection