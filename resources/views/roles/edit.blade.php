@extends('app')

@section('content')

        <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle de Roles</h3>


            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4>Actualizar Rol "{{$role->nombre}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>

       @if ($errors->any())
                      <div class="alert alert-danger" role="alert">
                        <p>Corrija el Error: </p>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>>
                        @endforeach
                        </ul>
                      </div>
                      @endif 
                      
      {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
      <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Rol']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
      </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->  
<center>


<br>
<table>
              <td><a href="/roles" class="btn btn-default btn-sm">Volver</a></td>
</table>
</center>
    </section>
      </section>


<div class="page-header">
        
      </div>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>


      <div class="page-header">
     @endsection
      
  </body>
</html>
