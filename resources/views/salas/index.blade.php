@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de Salas<a href="/salas/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Sala</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre</th>
                                  <th> Descripción</th>
                                  <th></th>
                                  <th></th>

                              </tr>
                              </thead>
                              <tbody>
                              @foreach($salas as $sala)
                              <tr>
                              <td>{{ $sala->nombre }}</td>
                              <td>{{ $sala->descripcion }}</td>
      <td>
        <td>{!! Html::link(route('salas.show', $sala->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
        <td>{!! Html::link(route('salas.edit', $sala->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
        <td>
          {!! Form::open(array('route' => array('salas.destroy', $sala->id), 'method' => 'DELETE')) !!}
            <button class="btn btn-xs btn-danger">Eliminar</button>
          {!! Form::close() !!}
        </td>
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
     <th class="center">Descargar Toda la Informacion de las Salas</th> <th class="center">{!!Html::link('files/salall','',['class' => 'glyphicon glyphicon-floppy-save', 'role' => 'button', 'aria-label' => 'Center Align'])!!}</th> 
@endsection

      
  </body>
</html>