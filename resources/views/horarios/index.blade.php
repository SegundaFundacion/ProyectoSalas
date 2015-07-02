@extends('app')

@section('content')
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                          <div class="head-table">
                                 <h2>Horarios</h2>
    </td>
    <td>
      <h4>Lista de Horarios<a href="/horarios/create" style="position: absolute; right: 30px" class="btn btn-default">Agregar Horario</a>
    </td>
  </table>
</p>
<h4>Tu horario para este día</h4>
<table class="table table-striped table-hover ">
  <tbody>
    @foreach($horarios as $horario)
    <tr>
      <td width=450>{{ $horario->fecha }}</td>
      <td>
        {!! Html::link(route('horarios.show', $horario->id), 'Detalles', array('class' => 'label label-info')) !!}
        {!! Html::link(route('horarios.edit', $horario->id), 'Modificar', array('class' => 'label label-success')) !!}
        <td>
          {!! Form::open(array('route' => array('horarios.destroy', $horario->id), 'method' => 'DELETE')) !!}
            <button class="label label-danger">Eliminar</button>
          {!! Form::close() !!}
        </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<p>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</p>

@stop
