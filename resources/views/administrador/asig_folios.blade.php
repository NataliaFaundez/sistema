@extends("home")
@section('asig_folios')
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
								<i class="glyphicon glyphicon-wrench pull-right"></i>
								<h4>Asignar folios</h4>
							</div>
						</div>
			
						<div class="panel-body">
							<form class="form form-vertical">
								<div class="control-group">
									<label for="" >Controlador</label>                 
									<select class="form-control" name='usuario_id' class="col-sm-5">
										<option value="##">Juanita</option>
										<option value="##">Mario</option>
									</select>
								</div>

								<div class="control-group">
									<label for="" >Folio</label>                 
									<select class="form-control" name='folios' class="col-sm-5">
										<option value="##">12238948 - 3</option>
										<option value="##">12342255 - 2</option>
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
		</div>
							
		<div class="col-md-6">
			<div class="input-group">
			    <input type="text" class="form-control" placeholder="Search for...">
		      	<span class="input-group-btn">
		        	<button class="btn btn-default" type="button">Go!</button>
		      	</span>
		    </div>
			<br>
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Controlador</th>	
								<th>Folio</th>							
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>							
		                        <td>Juanita</td>
		                        <td>12238948 - 3</td>              
								<td>
									<a class="btn btn-warning" href="">
										Editar
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a class="btn btn-danger" href="">
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