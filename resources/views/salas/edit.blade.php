@extends('app')

@section('content')

        <table>
    <td width=505><h2>Registro de Salas</h2></td>
    <td><a href="/salas" class="btn btn-default btn-sm">Volver</a>
    <td><a href="/salas/create" class="btn btn-warning btn-sm">Agregar Sala</a></td>
  </table>
</p>
<h4>Actualizar datos de la Sala "{{$sala->nombre}}"</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::model($sala, ['route' => ['salas.update', $sala->id], 'method' => 'patch']) !!}
      <div class="form-group">Campus:
      {!! Form::select('campus_id', $campus) !!}
      </div>
      <div class="form-group">Tipo de sala:
      {!! Form::select('tipo_sala_id', $tiposdesala) !!}
      </div>
        <div class="form-group">Nombre:
          {!! Form::text('nombre', null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
        </div>
        <div class="form-group">Descripcion:
          {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
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
@stop
