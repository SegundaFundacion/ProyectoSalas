@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Lista de Carreras<a href="/carreras/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Carrera</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Escuela</th>
                                  <th> Código</th>
                                  <th> Nombre</th>
                                  <th> Descripción</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($carreras as $carrera)
                              <tr>
                                  <td>{{ $carrera->escuela->nombre }}</td>
                                  <td>{{ $carrera->codigo}}</td>
                                  <td>{{ $carrera->nombre }}</td>
                                  <td>{{ $carrera->descripcion }}</td>
                                  <td>{!! Html::link(route('carreras.show', $carrera->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('carreras.edit', $carrera->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('carreras.destroy', $carrera->id), 'method' => 'DELETE')) !!}
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