@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Horario</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                      <h4 class="mb">Ingrese Fecha:</h4>
                      {!! Form::open(['route' => 'horarios.store']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                {!! Form::text('fecha', null, ['id' => 'fecha1','class' => 'form-control', 'placeholder'=>'Fecha del Horario']) !!}
              </div>
              <div class="form-group"><p>
                 <h4> Seleccione el Tipo de sala a Utilizar:</h4>
                {!! Form::select('salas_id', $salas) !!}</p>
              </div>
              <div class="form-group"><p>
                 <h4> Seleccione Periodo a Utilizar:</h4>
                {!! Form::select('periodo_id', $periodo) !!}</p>
              </div>
              <div class="form-group"><p>
                 <h4> Seleccione Curso:</h4>
                {!! Form::select('curso_id', $curso) !!}</p>
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

  </body>

</html>
@endsection