@extends('app')

@section('content')

        <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Edite la información del Docente "{{$docente->nombres}} {{$docente->apellidos}}" </h4>

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

                      {!! Form::model($docente, ['route' => ['docentes.update', $docente->id], 'method' => 'patch']) 
                      !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Departamento: </label>
                                {!! Form::select('nombre', $departamento) !!}
                              <br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Departamento: </label>
                              <div class="col-sm-10">
                               {!! Form::text('departamento_id', null, ['class' => 'form-control', 'placeholder'=>'Departamento']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">RUT: </label>
                              <div class="col-sm-10">
                                 {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'RUT']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Nombres: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder'=>'Nombres']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Apellidos: </label>
                              <div class="col-sm-10">
                                  {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder'=>'Apellidos']) !!}
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
              <td><a href="/docentes" class="btn btn-default btn-sm">Volver</a></td>
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
