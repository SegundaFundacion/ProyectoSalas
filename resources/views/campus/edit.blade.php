@extends('app')

@section('content')

        <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Edite la información del campus "{{$campu->nombre}}" </h4>

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

                      {!! Form::model($campu, ['route' => ['campus.update', $campu->id], 'method' => 'patch']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Dirección: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder'=>'Dirección']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Latitud: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder'=>'Latitud']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Longitud: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder'=>'Longitud']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Descripción: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder'=>'Descripción']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Encargado: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('rut_encargado', null, ['class' => 'form-control', 'placeholder'=>'RUT Encargado']) !!}
                              </div>
                              <br><br><br>
                                {!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
                          </div>
                      </form>
                      {!! Form::close() !!}
                      <p>
        @if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
          @endif
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->  
         

            <center>


<br>
<table>
              <td><a href="/campus" class="btn btn-default btn-sm">Volver</a></td>
</table>
</center>


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
