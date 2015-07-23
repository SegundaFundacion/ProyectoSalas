@extends('app')

@section('content')
      
<section id="main-content">
          <section class="wrapper">
          <br><br><br><br>
            <h3> Registrar Rol</h3>

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
                      <h4 class="mb">Ingrese la información del Usuario</h4>
                      {!! Form::open(['route' => 'rolesusuarios.store']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'Rut']) !!}
              </div>
              <div class="form-group"><p>Rol:
                {!! Form::select('rol_id', $rol, ['class' => 'form-control']) !!}<p>
              </div>
              <div class="form-group">
                {!! Form::submit('Registrar', ["class" => "btn btn-success btn-block"]) !!}
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
</center>
    </section>
  
      </section>

  </body>

</html>

