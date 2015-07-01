@extends('app')

@section('content')

      <section id="main-content">
          <section class="wrapper">
          <br>
          <h2>HORARIO</h2></td>
      <td><a href="/horarios" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('horarios.edit', $horario->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
</p>
<h4>Información del horario "{{$horario->fecha}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($horario))
            <tr height= 10>
              <td width=100>
                <h5><b>Fecha:</b></h5>
              </td>
              <td>{{$horario->fecha}}</td>
            <tr>
              <td width=250><h5><b>Curso:</b></h5></td>
              <td>{{$horario->curso_id }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Sala:</b></h5></td>
              <td>{{$sala->nombre}}</td>
          </tr>
          <tr>
              <td width=250><h5><b>Periodo:</b></h5></td>
              <td>{{$periodo->bloque }}&nbsp&nbsp&nbsp&nbsp{{$periodo->inicio }}&nbsp:&nbsp{{$periodo->fin }} </td>
            </tr>
          @else
          <p>
            No existe información para esta fecha.
          </p>
          @endif
      </tbody>
  </table>
@stop