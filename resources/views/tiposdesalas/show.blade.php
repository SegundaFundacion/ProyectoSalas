@extends('app')

@section('content')

      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle Tipo Sala</h3>
            
  </table>
</p>
<h4>Información del tipo de sala "{{$tiposdesala->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($tiposdesala))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$tiposdesala->nombre}}</td>
            <tr>
              <td width=100><h5><b>Descripción:</b></h5></td>
              <td>{{$tiposdesala->descripcion}}</td>
            </tr>
          @else
          <p>
            No existe información de este tipo de Sala.
          </p>
          @endif
      </tbody>
  </table>
  <center><td><a href="/tiposdesalas" class="btn btn-default btn-sm">Volver</a>
    {!! Html::link(route('tiposdesalas.edit', $tiposdesala->id), 'Modificar', array('class' => 'btn btn-sm btn-primary')) !!}</td></center>
@stop
