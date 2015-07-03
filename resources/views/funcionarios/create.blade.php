@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Funcionario</h3>
            
             @if ($errors->any())
                      <div class="alert alert-danger" role="alert">
                        <p>Corrija el Error: </p>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>>
                        @endforeach
                        </ul>
                      </div>
                      @endif
                      
            <!-- BASIC FORM ELEMENTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Ingrese la información del Funcionario</h4>
                      {!! Form::open(['route' => 'funcionarios.store']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group"><p>Departamento:
                {!! Form::select('departamento_id', $departamento, ['class' => 'form-control']) !!}<p>
              </div>
              <div class="form-group">
                {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'RUT']) !!}
              </div>
              <div class="form-group">
                {!! Form::text('nombres', null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}
              </div>
              <div class="form-group">
                {!! Form::text('apellidos', null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
              </div>
              <div class="form-group">
                {!! Form::submit('Enviar', ["class" => "btn btn-success btn-block"]) !!}
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
