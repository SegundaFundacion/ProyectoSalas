@extends('app')

@section('content')
 <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <br><br><br><br><br><br>
                            <h4>Listado de Usuarios<a href="/rolesusuarios/create" style="position: absolute; right: 30px" class="btn btn-warning btn-sm">Agregar Rol</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> RUT</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($rolesusuarios as $rolesusuario)
                              <tr>
                                  <td>{{ $rolesusuario->rut }}</td>
                                  <td>{!! Html::link(route('rolesusuarios.show', $rolesusuario->id), 'Detalles', array('class' => 'label label-info')) !!}</td>
                                  <td>{!! Html::link(route('rolesusuarios.edit', $rolesusuario->id), 'Editar', array('class' => 'label label-success')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('rolesusuarios.destroy', $rolesusuario->id), 'method' => 'DELETE')) !!}
                                        <button class="label label-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                  </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              <p>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</p>
              </section>
              </section>
  </body>
</html>l