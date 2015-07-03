@extends('app')

@section('content')
      
      <table>
    <td width=505><h2>Registro de Salas</h2></td>

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
<h4>Nueva Sala</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::open(['route' => 'salas.store']) !!}
        <div class="form-group">
          {!! Form::select('campus_id', $campus) !!}
        </div>
        <div class="form-group">
          {!! Form::select('tipo_sala_id', $tiposdesala) !!}
        </div>
        <div class="form-group">
          {!! Form::text('nombre', null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
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