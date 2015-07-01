@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Funcionario</h3>
            
            <!-- BASIC FORM ELEMENTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Ingrese la información del Funcionario</h4>
                      {!! Form::open(['route' => 'rolesusuarios.store']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group"><p>Departamento:
                {!! Form::open(['route' => 'rolesusuarios.store']) !!}
        <div class="form-group">
          {!! Form::text('rut', null, ['class' => 'form-control', 'placeholder'=>'Rut']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('rol_id', null,['class'=>'form-control', 'placeholder'=>'Rol'])!!}
        </div>
        <div class="form-group">
          {!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
        </div>
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
      @endsection
  </body>
</html>