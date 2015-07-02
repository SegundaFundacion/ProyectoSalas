@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Lista Cursos<a href="/cursos/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Cursos</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre Asignatura</th>
                                  <th> Seccion Curso</th>
                                  <th> Docente</th>
              
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($cursos as $curso)
                              <tr>
                                  <td>{{ $curso->asignatura->nombre }}</td>
                                  <td>{{ $curso->seccion }}</td>
                                  <td>{{ $curso->docente->nombres }}</td>
                                  <td>{!! Html::link(route('cursos.show', $curso->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('cursos.edit', $curso->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('cursos.destroy', $curso->id), 'method' => 'DELETE')) !!}
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