@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registro Cursos</h3>

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
<h4>Nuevo curso</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::open(['route' => 'cursos.store']) !!}
      <div class="form-group">
        {!! Form::select('asignatura_id', $asignatura) !!}
        </div>
        <div class="form-group">
          {!! Form::text('semestre', null, ['class' => 'form-control', 'placeholder'=>'Semestre al que pertenece']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('anio', null,['class'=>'form-control', 'placeholder'=>'Año academico'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('seccion', null,['class'=>'form-control', 'placeholder'=>'Seccion'])!!}
        </div>

        <div class="form-group">
        {!! Form::select('docente_id', $docente) !!}
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