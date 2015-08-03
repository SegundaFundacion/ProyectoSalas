@extends('app')

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
	<div class="row">
	    
		<div class="col-md-6 col-md-offset-3" ALIGN=CENTER >
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Error!</strong> Ha ocurrido un problema con el ingreso.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			<div class="panel panel-default">
				<div class="panel-heading"  table style="background:#0E994D"><span style="color:#000000">Autenticación</div>
				<div class="panel-body" table style="background:#044657">
					

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label"><span style="color:#000000">Rut:   </label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="rut" value="{{ old('rut') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label"><span style="color:#000000">Contraseña:</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"><span style="color:#000000"> Recordar
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Entrar</button>

								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
