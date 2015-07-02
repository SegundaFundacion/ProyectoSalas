@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de Facultades<a href="/facultades/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Facultad</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre</th>
                                  <th> Campus</th>
                                  <th> Descripción</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($facultades as $facultad)
                              <tr>
                                  <td>{{ $facultad->nombre }}</td>
                                  <td>{{ $facultad->campus->nombre }}</td>
                                  <td>{{ $facultad->descripcion }}</td>
                                  <td>{!! Html::link(route('facultades.show', $facultad->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('facultades.edit', $facultad->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('facultades.destroy', $facultad->id), 'method' => 'DELETE')) !!}
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