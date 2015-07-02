@extends('app')

@section('content')


        <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                            <h4>Listado de Campus<a href="/campus/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Campus</a>
                            </h4>
                          </div>
                            <hr>
                              <thead>
                              <tr>
                                  <th> Nombre</th>
                                  <th> Dirección</th>
                                  <th> Descripción</th>
                                  <th> Encargado</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($campus as $campu)
                              <tr>
                                  <td>{{ $campu->nombre }}</td>
                                  <td>{{ $campu->direccion }}</td>
                                  <td>{{ $campu->descripcion }}</td>
                                  <td>{{ $campu->rut_encargado }}</td>
                                  <td>{!! Html::link(route('campus.show', $campu->id), 'Detalles', array('class' => 'btn btn-xs btn-success')) !!}</td>
                                  <td>{!! Html::link(route('campus.edit', $campu->id), 'Modificar', array('class' => 'btn btn-xs btn-primary')) !!}</td>
                                  <td>
                                        {!! Form::open(array('route' => array('campus.destroy', $campu->id), 'method' => 'DELETE')) !!}
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
@endsection

