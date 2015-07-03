@extends('app')

@section('content')

        <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registro Asignaturas</h3>

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
  <h4>Actualizar datos de la Asignatura "{{$asignatura->nombre}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($asignatura, ['route' => ['asignaturas.update', $asignatura->id], 'method' => 'patch']) !!}
      <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre de la asignatura']) !!}
      </div>
      <div class="form-group">
        {!! Form::text('codigo', null,['class'=>'form-control', 'placeholder'=>'Codigo de asignatura'])!!}
      </div>
      <div class="form-group">
        {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
      </div>
      <div class="form-group">
      {!! Form::select('departamento_id', $departamentos) !!}
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


<br>
<center>
      <td><a href="/asignaturas" class="btn btn-default btn-sm">Volver</a>
    </center>
@endsection