@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
              <h2>Registro de Horarios</h2></td>
              
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
<h4>Nuevo horario</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::open(['route' => 'horarios.store']) !!}
        <div class="form-group">
          {!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder'=>'Fecha del Horario']) !!}
        </div>
        <div class="form-group">Sala:
        {!! Form::select('salas_id', $salas) !!}
        </div>
        <div class="form-group">Periodo:
        {!! Form::select('periodo_id', $periodo) !!}
        </div>
        <div class="form-group">Curso:
        {!! Form::select('curso_id', $curso) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Enviar', ["class" => "btn btn-success btn-block"]) !!}
        </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
@stop
