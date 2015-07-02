@extends('app')

@section('content')

       <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle del Campus</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Información del campus "{{$campu->nombre}}" </h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->nombre}}" disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Dirección: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->direccion}}" disabled>
                              </div>

                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Latitud: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->latitud}}" disabled>
                              </div>

                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Longitud: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->longitud}}" disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Descripción: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->descripcion}}" disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Encargado: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$campu->rut_encargado}}" disabled>
                              </div>
                          </div>
                          
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->  
            
<center><div id="map"></div>
<br>
<table>
              <td><a href="/campus" class="btn btn-default btn-sm">Volver</a>
                {!! Html::link(route('campus.edit', $campu->id), 'Modificar', array('class' => 'btn btn-sm btn-primary')) !!}</td>
</table>
</center>
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
