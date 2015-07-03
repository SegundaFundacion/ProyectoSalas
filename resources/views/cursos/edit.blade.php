@extends('app')

@section('content')

        <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle Curso</h3>

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
  <h4>Actualizar datos del curso "{{$curso->asignatura_id}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($curso, ['route' => ['cursos.update', $curso->id], 'method' => 'patch']) !!}
      <div class="form-group">Semestre:
        {!! Form::text('semestre', null, ['class' => 'form-control', 'placeholder'=>'Semestre al que pertenece']) !!}
      </div>
      <div class="form-group">Año:
        {!! Form::text('anio', null,['class'=>'form-control', 'placeholder'=>'Año academico'])!!}
      </div>
      <div class="form-group">Seccion:
        {!! Form::text('seccion', null,['class'=>'form-control', 'placeholder'=>'Seccion'])!!}
      </div>
      <div class="form-group">Asignatura:
      {!! Form::select('asignatura_id', $asignaturas) !!}
      </div>
      <div class="form-group">Docente:
      {!! Form::select('docente_id', $docente) !!}
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

      <center><td><a href="/cursos" class="btn btn-default btn-sm">Volver</a>
    </center>
@stop
