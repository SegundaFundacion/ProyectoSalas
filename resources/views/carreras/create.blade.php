@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Una Carrera</h3>
            
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
                      <h4 class="mb">Ingrese información de la Carrera</h4>
                      {!! Form::open(['route' => 'carreras.store']) !!}
                      <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
              </div>
               <div class="form-group">
                {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder'=>'Código']) !!}
              </div>
              <div class="form-group"><p>Seleccione Escuela:
                {!! Form::select('escuela_id', $escuela, ['class' => 'form-control']) !!}<p>
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
