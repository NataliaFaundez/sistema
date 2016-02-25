
@extends("home")

@section('encuestas')
<div class="row">
	<!-- center left-->
	<div class="col-md-4">
		<form class="form-horizontal" action="##" method="POST">
		<!--tabs-->
			{{ csrf_field() }}     
			<div class="panel">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<h4>Administrar Encuesta</h4>
						</div>
					</div>

					<div class="panel-body">
						<form class="form form-vertical" >

							<div class="control-group">
								<label>Nombre de encuesta</label>						
								<div class="controls">
									<input type="text" name ='nombre' class="form-control" placeholder="Enter Name">
								</div>	
							</div>					

							<div class="control-group">
								<label for="" >Proyecto que pertenece</label>                 
								<select class="form-control" name='region_id' class="col-sm-5">
									<option value="##">lala</option>
									<option value="##">nana</option>
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
					<!--/panel content-->
				</div>                       
			</div>
			<hr>  
		</form>


	</div>
	<!--/col-->
	<div class="col-md-5">
	<div class="input-group">
	<input type="text" class="form-control" placeholder="Search for...">
	<span class="input-group-btn">
	<button class="btn btn-default" type="button">Go!</button>
	</span>
	</div><!-- /input-group -->
	<BR>  
	<div class="panel panel-default">
	<div class="table-responsive">
	<table class="table table-striped">
	<thead>
	<tr>
	<th>Región</th>
	<th>Comuna</th>
	<th>Acciones</th>
	</tr>
	</thead>
	<tbody>
	<tbody>

	<tr>							

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
@endsection