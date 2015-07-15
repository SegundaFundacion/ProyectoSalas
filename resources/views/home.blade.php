@extends('app')

@section('content')
 <br>
  <br>
   <br>
   <div class="jumbotron">
        <p> <CENTER> <strong>Menú Principal.</strong></CENTER> </p>
      </div>

<br>
   <br>
<center>
                          <a href="/menuadmin"  class="btn btn-lg btn-primary">Administrador</a>
                          <a href="/menuencar"  class="btn btn-lg btn-success">Encargado</a>
                          <a href="/menudocen"  class="btn btn-lg btn-primary">Docente</a>
                          <a href="/menuestudi"  class="btn btn-lg btn-success">Estudiante</a>
                      </center>
@endsection
