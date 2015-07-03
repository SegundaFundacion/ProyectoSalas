@extends('app')

@section('content')

        <table>
    <td width=505><h2>Registro de periodos</h2></td>

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
    
</table>
</p>
  <h4>Actualizar periodo "{{$periodo->bloque}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($periodo, ['route' => ['periodos.update', $periodo->id], 'method' => 'patch']) !!}
      <div class="form-group">Bloque:
        {!! Form::text('bloque', null, ['class' => 'form-control', 'placeholder'=>'Bloque']) !!}
      </div>
      <div class="form-group">Inicio:
        {!! Form::text('inicio', null,['class'=>'form-control', 'placeholder'=>'Hora de inicio'])!!}
      </div>
      <div class="form-group">Final:
        {!! Form::text('fin', null,['class'=>'form-control', 'placeholder'=>'Hora de fin'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Modificar', ["class" => "btn btn-success btn-block"]) !!}
      </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
      <center><td><a href="/periodos" class="btn btn-default btn-sm">Volver</a></center>


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
