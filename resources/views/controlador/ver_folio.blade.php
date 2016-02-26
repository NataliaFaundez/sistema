@extends("home")

@section('ver_folio')
<hr>
<div class="col-sm-6">				               	
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
						<th>Encuesta</th>	
						<th>Folio</th>						
					</tr>
				</thead>
				<tbody>
					<tr>							
                        <td>Casen 2011</td>
                        <td>11234-4</td>             									                               
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection