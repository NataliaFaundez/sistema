@extends("home")

@section('usuarios')

<hr>
<div class="col-sm-9">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" action="##" method="POST">
				{{ csrf_field() }}     
				<div class="panel">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<h4>Usuarios</h4>
							</div>
						</div>

						<div class="panel-body">
							<form class="form form-vertical" >

								<div class="control-group">
									<label>Nombre</label>						
									<div class="controls">
										<input type="text" name ='nombre' class="form-control">
									</div>	
								</div>			

								<div class="control-group">
									<label>Correo</label>						
									<div class="controls">
										<input type="text" name ='correo' class="form-control">
									</div>	
								</div>	

								<div class="control-group">
									<label>Clave</label>						
									<div class="controls">
										<input type="text" name ='clave' class="form-control">
									</div>	
								</div>	

								<div class="control-group">
									<label for="" >Rol</label>                 
									<select class="form-control" name='rol' class="col-sm-5">
										<option value="##">administrador</option>
										<option value="##">encuestador</option>
										<option value="##">controlador</option>
									</select>
								</div>			

								<div class="control-group">
									<label for="" >Cliente</label>                 
									<select class="form-control" name='cliente_id' class="col-sm-5">
										<option value="##">cliente1</option>
										<option value="##">cliente2</option>
									</select>
								</div>

								<br>

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
			</form>
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
							<th>Cliente</th>
							<th>Usuario</th>
							<th>Rol</th>
							<th>Acciones</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td> ssdfg </td>							
								<td> ssdfg </td>  
								<td> dfg </td> 				
								<td>
									<a class="btn btn-warning" href="##">
									Editar
									<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a class="btn btn-danger" href="##}">
									Eliminar 
									<span class="glyphicon glyphicon-remove"></span>
									</a>	 			
								</td>										                               
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection