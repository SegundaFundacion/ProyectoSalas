@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Departamento</h3>

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
                      <h4 class="mb">Ingrese la información del Departamento</h4>
                      {!! Form::open(['route' => 'departamentos.store']) !!}
                      <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
              </div>
              <div class="form-group"><p>Seleccione Facultad:
                {!! Form::select('facultad_id', $facultad, ['class' => 'form-control']) !!}<p>
              </div>
              <div class="form-group">
                {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
              </div>
              <div class="form-group">
                {!! Form::submit('Enviar', ["class" => "btn btn-success btn-block"]) !!}
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
</center>
    </section>
      </section>
      @endsection
  </body>
</html>
