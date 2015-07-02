@extends('app')

@section('content')
 <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de Estudiantes<a href="/estudiantes/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Estudiante</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Carrera</th>
                                  <th> RUT</th>
                                  <th> Nombres</th>
                                  <th> Apellidos</th>
                                  <th> E-mail</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($estudiantes as $estudiante)
                              <tr>
                                  <td>{{ $estudiante->carrera->nombre }}</td>
                                  <td>{{ $estudiante->rut }}</td>
                                  <td>{{ $estudiante->nombres }}</td>
                                  <td>{{ $estudiante->apellidos }}</td>
                                  <td>{{ $estudiante->email }}</td>
                                  <td>{!! Html::link(route('estudiantes.show', $estudiante->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('estudiantes.edit', $estudiante->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('estudiantes.destroy', $estudiante->id), 'method' => 'DELETE')) !!}
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
              <p>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</p>
              </section>
              </section>
<div class="page-header">
        
      </div>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>


      <div class="page-header">
@endsection

      
  </body>
</html>