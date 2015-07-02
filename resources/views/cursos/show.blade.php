@extends('app')

@section('content')

      <section id="main-content">
          <section class="wrapper">
          <br>
            <h3> Detalle Cursos</h3>
            
  </table>
</p>
<h4>Información del curso "{{$asignaturas->nombre}} ({{$curso->seccion }})" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($curso))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$asignaturas->nombre}}</td>
            <tr>
              <td width=250><h5><b>La seccion de este curso es la numero:</b></h5></td>
              <td>{{$curso->seccion }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>El profesor asignado es:</b></h5></td>
              <td>{{$docente->nombres}}</td>
          </tr>
          @else
          <p>
            No existe información de este curso.
          </p>
          @endif
      </tbody>
  </table>

  <center><td><a href="/cursos" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('cursos.edit', $curso->id), 'Modificar', array('class' => 'btn btn-sm btn-primary')) !!}</td>
  </table></center>
@stop