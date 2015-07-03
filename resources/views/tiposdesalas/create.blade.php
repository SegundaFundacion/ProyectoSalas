@extends('app')

@section('content')
      
      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Registro Tipo Salas</h3>

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

            <td><a href="/tiposdesalas" class="btn btn-default btn-sm">Volver</a>
    <td><a href="/tiposdesalas/create" class="btn btn-warning btn-sm">Agregar Tipo de Sala</a></td>
  </table>
</p>
<h4>Nuevo Tipo de Sala</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::open(['route' => 'tiposdesalas.store']) !!}
        <div class="form-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
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