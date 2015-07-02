@extends('app')

@section('content')

<br><br><br>

<div class="jumbotron">
        <p> <CENTER> <strong>Bienvenido al sistema web "Gestion de Salas".</strong></CENTER> </p>
      </div>
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <center>
                          <a href="/menuadmin"  class="btn btn-lg btn-primary">Administrador</a>
                          <a href="/menuencar"  class="btn btn-lg btn-success">Encargado</a>
                          <a href="/menudocen"  class="btn btn-lg btn-primary">Docente</a>
                          <a href="/menuestudi"  class="btn btn-lg btn-success">Estudiante</a>
                      </center>
        
        
     
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              </section>
              </section>

 

@endsection








