@extends('app')

@section('content')
 <br>
  <br>
   <br>
   
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Te has logueado exitosamente

				</div>

			</div>

		</div>
	</div>
</div>
<br>
   <br>
<center>
                          <a href="/menuadmin"  class="btn btn-lg btn-primary">Administrador</a>
                          <a href="/menuencar"  class="btn btn-lg btn-success">Encargado</a>
                          <a href="/menudocen"  class="btn btn-lg btn-primary">Docente</a>
                          <a href="/menuestudi"  class="btn btn-lg btn-success">Estudiante</a>
                      </center>
@endsection
