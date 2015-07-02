@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de Departamento<a href="/departamentos/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Departamento</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre</th>
                                  <th> Facultad</th>
                                  <th> Descripción</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($departamentos as $departamento)
                              <tr>
                                  <td>{{ $departamento->nombre }}</td>
                                  <td>{{ $departamento->facultad->nombre}}</td>
                                  <td>{{ $departamento->descripcion }}</td>
                                  <td>{!! Html::link(route('departamentos.show', $departamento->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('departamentos.edit', $departamento->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('departamentos.destroy', $departamento->id), 'method' => 'DELETE')) !!}
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