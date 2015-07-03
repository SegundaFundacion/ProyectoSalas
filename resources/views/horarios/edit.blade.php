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

    <td><a href="/horarios" class="btn btn-default btn-sm">Volver</a>
    <a href="/horarios/create" class="btn btn-warning btn-sm">Agregar horario</a></td>
</table>
</p>
  <h4>Actualizar  horario "{{$horario->fecha}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($horario, ['route' => ['horarios.update', $horario->id], 'method' => 'patch']) !!}
      <div class="form-group">Fecha:
        {!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder'=>'Fecha del horario']) !!}
      </div>
      <div class="form-group">Sala:
        {!! Form::text('sala_id', null,['class'=>'form-control', 'placeholder'=>'Sala'])!!}
      </div>
      <div class="form-group">Periodo:
      {!! Form::select('periodo_id', $periodos) !!}
      </div>
      <div class="form-group">Curso:
        {!! Form::text('curso_id', null,['class'=>'form-control', 'placeholder'=>'Curso'])!!}
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
@stop