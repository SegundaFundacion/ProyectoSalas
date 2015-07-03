@extends('app')

@section('content')

        <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle Carrera</h3>

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
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Edite la información de la Carrera "{{$carrera->nombre}}" </h4>
                       {!! Form::model($carrera, ['route' => ['carreras.update', $carrera->id], 'method' => 'patch']) 
                      !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Escuela: </label>
                              {!! Form::select('escuela_id', $escuela) !!}
                </div>
                <br>
                              <label class="col-sm-2 col-sm-2 control-label">Código: </label>
                              <div class="col-sm-10">
                                 {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder'=>'Código']) !!}
                              </div>
                <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Nombre: </label>
                              <div class="col-sm-10">
                                 {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Descripción: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder'=>'Descripción']) !!}
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
                </p>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->  
<center>
<br>
<table>
              <td><a href="/carreras" class="btn btn-default btn-sm">Volver</a></td>
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
