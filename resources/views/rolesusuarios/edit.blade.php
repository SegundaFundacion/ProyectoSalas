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
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    </div>
                    @endif
                      <h4 class="mb">Edite la información del Usuario "{{$rolesusuario->rut}}" </h4>
                      {!! Form::model($rolesusuario, ['route' => ['rolesusuarios.update', $rolesusuario->id], 'method' => 'patch']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">RUT: </label>
                              <div class="col-sm-10">
                                 {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'RUT']) !!}
                              </div>
                              <br><br><br>
                              <label class="col-sm-2 col-sm-2 control-label">Rol: </label>
                              <div class="col-sm-10">
                               {!! Form::select('rol_id', $rol, ['class' => 'form-control']) !!}
                              </div>
                              <br><br><br>
                                {!! Form::submit('Actualizar', ["class" => "btn btn-success btn-block"]) !!}
                          </div>
                      </form>
                      {!! Form::close() !!}
                      <p>
              @if(Session::has('message'))
                  <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
                @endif
                </p>
                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->
<center>
<br>
<table>
              <td><a href="/rolesusuarios" class="btn btn-default btn-sm">Volver</a></td>
</table>
</center>
    </section>
      </section>

</body>

</html>