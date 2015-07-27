@extends('app')

@section('content')


    <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de horarios<a href="/horarios/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar horarios</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Fecha</th>
                                  <th> Sala</th>
                                  <th> Período</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($horarios as $horario)
                              <tr>
                                  <td>{{ $horario->fecha }}</td>
                                  <td>{{ $horario->sala_id }}</td>
                                  <td>{{ $horario->periodo_id }}</td>
                                  <td>{!! Html::link(route('horarios.show', $horario->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('horarios.edit', $horario->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('horarios.destroy', $horario->id), 'method' => 'DELETE')) !!}
                                        <button class="btn btn-xs btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                  </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              </section>
              </section>
              @endsection
  </body>
</html>
@endsection