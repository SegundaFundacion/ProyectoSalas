@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Tipos Salas<a href="/tiposdesalas/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Tipo Sala</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre </th>
                                  <th> Descripcion</th>

                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($tiposdesalas as $tiposdesala)
                              <tr>
                                  <td>{{ $tiposdesala->nombre }}</td>
                                  <td>{{ $tiposdesala->descripcion }}</td>
                                  <td>{!! Html::link(route('tiposdesalas.show', $tiposdesala->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('tiposdesalas.edit', $tiposdesala->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('tiposdesalas.destroy', $tiposdesala->id), 'method' => 'DELETE')) !!}
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
        <th class="center">Descargar Toda la Informacion de los Tipos de Salas</th> <th class="center">{!!Html::link('files/tposalall','',['class' => 'glyphicon glyphicon-floppy-save', 'role' => 'button', 'aria-label' => 'Center Align'])!!}</th> 
@endsection

      
  </body>
</html>