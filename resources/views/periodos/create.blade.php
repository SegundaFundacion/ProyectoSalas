@extends('app')

@section('content')
      
      <table>
    <td width=505><h2>Registro de Periodos</h2></td>

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
<h4>Nuevo Periodo</h4>
  <table class="table table-striped table-hover ">
    <tbody>
      {!! Form::open(['route' => 'periodos.store']) !!}
        <div class="form-group">
          {!! Form::text('bloque', null, ['class' => 'form-control', 'placeholder'=>'Bloque']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('inicio', null,['class'=>'form-control', 'placeholder'=>'Hora de inicio'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('fin', null,['class'=>'form-control', 'placeholder'=>'Hora de fin'])!!}
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
      <div class="page-header">
        
      </div>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>
      <p>
        
      </p>


      <div class="page-header">
      @endsection
  </body>
</html>
