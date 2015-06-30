@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registrar Roles</h3>
            
            <!-- BASIC FORM ELEMENTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb">Ingrese la información de los Roles</h4>
                      {!! Form::open(['route' => 'roles.store']) !!}
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group"><p>Roles:
                {!! Form::open(['route' => 'roles.store']) !!}
        <div class="form-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Rol']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
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
