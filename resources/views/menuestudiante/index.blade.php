@extends('app')
@section('content')
<br><br><br>
<div class="jumbotron">
        <p> <CENTER> <strong>Bienvenido al menu del estudiante.</strong></CENTER> </p>
      </div>
<section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                      <center>
                          <a href="/horarios"  class="btn btn-lg btn-primary">Horarios</a>
                          <a href="/salas"  class="btn btn-lg btn-success">Salas</a>
                          <a href="/campus"  class="btn btn-lg btn-primary">Campus</a>
                          <a href="/periodos"  class="btn btn-lg btn-success">Periodos</a>                     
                      </center>
        
        
     
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              </section>
              </section>
@endsection