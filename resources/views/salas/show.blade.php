@extends('app')

@section('content')

      <table>
    <td width=505><h2>Registro de Salas</h2></td>
    
  </table>
</p>
<h4>Información de la sala "{{$sala->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($sala))
            <tr height= 10>
              <td width=100>
                <h5><b>Campus:</b></h5>
              </td>
              <td>{{$campus->nombre}}</td>
            <tr>
              <td width=100><h5><b>Tipo de Sala:</b></h5></td>
              <td>{{$tiposala->nombre}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Nombre:</b></h5></td>
              <td>{{$sala->nombre}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Descripción:</b></h5></td>
              <td>{{$sala->descripcion}}</td>
            </tr>
          @else
          <p>
            No existe información de esta Sala.
          </p>
          @endif
      </tbody>
  </table>
  <center><td><a href="/salas" class="btn btn-default btn-sm">Volver</a>
    {!! Html::link(route('salas.edit', $sala->id), 'Modificar', array('class' => 'btn btn-sm btn-primary')) !!}</td></center>
@stop
