@extends('app')

@section('content')

<section id="main-content">
          <section class="wrapper">
          <br><br><br>
            <h3> Detalle del Usuario</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Información de "{{$rolesusuario->rut}}"</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">RUT: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$rolesusuario->rut }}" disabled>
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Rol: </label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$rol->nombre}}" disabled>
                              </div>
                          </div>
                          
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->  
<center>
<br>
<table>
              <td><a href="/rolesusuarios" class="btn btn-default btn-sm">Volver</a>
                {!! Html::link(route('rolesusuarios.edit', $rolesusuario->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
</table>
</center>
    </section>
      </section>

</body>

</html>