@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Una Escuela</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Ingrese la información de la Escuela</h4>
                      {!! Form::open(['route' => 'escuelas.store']) !!}
                      <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
              </div>
              <div class="form-group"><p>Seleccione Departamento:
                {!! Form::select('departamento_id', $departamento, ['class' => 'form-control']) !!}<p>
              </div>
              <div class="form-group">
                {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
              </div>
              <div class="form-group">
                {!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
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
