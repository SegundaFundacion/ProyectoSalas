@extends('app')

@section('content')

 <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle del Horario</h3>

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
                      <h4 class="mb">Edite la información del horario</h4>
                      {!! Form::model($horario, ['route' => ['horarios.update', $horario->id], 'method' => 'patch']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha: </label>
                              <div class="col-sm-10">
                                 {!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder'=>'Fecha del horario']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Sala: </label>
                              <div class="col-sm-10">
                                  {!! Form::select('sala_id', $salas) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Período: </label>
                              <div class="col-sm-10">
                                  {!! Form::select('periodo_id', $periodos) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Curso: </label>
                              <div class="col-sm-10">
                                 {!! Form::select('asignatura_id', $asignaturas) !!}
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
              <td><a href="/horarios" class="btn btn-default btn-sm">Volver</a></td>
</table>
</center>
    </section>
      </section>

</body>
</html>
@endsection