@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
      <p>Ingrese Datos de Campus a agregar</p>
      
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

      {!! Form::open(['route' => 'campus.store']) !!}
        <div class="form-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre del Campus']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('direccion', null,['class'=>'form-control', 'placeholder'=>'Direccion'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('latitud', null,['class'=>'form-control', 'placeholder'=>'Latitud'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('longitud', null,['class'=>'form-control', 'placeholder'=>'Longitud'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('rut', null,['class'=>'form-control', 'placeholder'=>'Rut encargado'])!!}
        </div>
        <div class="form-group">
          {!! Form::submit('Enviar', ["class" => "btn btn-success btn-block"]) !!}
        </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-sm btn-primary disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
        
        
<br>

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
     </section>
              </section>
      @endsection
  </body>
</html>
