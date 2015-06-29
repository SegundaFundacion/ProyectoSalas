<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Campus</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/campus">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>UTEM</h1>
        <p>Universidad Tecnológica Metropolitana</p>
        <p>Creación de Campus</p>
        <img src = utem.png> 


      </div>

      <p>Ingrese Datos de Campus a agregar</p>
      

      {!! Form::open(['route' => 'campus.store']) !!}
        <div class="form-group">
          {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre del Campus']) !!}
        </div>
        <div class="form-group">
          {!! Form::text('direccion', null,['class'=>'form-control', 'placeholder'=>'Direccion'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('latitud', null,['class'=>'form-control', 'placeholder'=>'Latitud'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('longitud', null,['class'=>'form-control', 'placeholder'=>'Longitud'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripción'])!!}
        </div>
        <div class="form-group">
          {!! Form::text('rut', null,['class'=>'form-control', 'placeholder'=>'Rut encargado'])!!}
        </div>
        <div class="form-group">
          {!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
        </div>
      {!! Form::close() !!}
      <p>
        @if(Session::has('message'))
          <div class="btn btn-sm btn-primary disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
        
        <center><div id="map"></div>
<br>
<table>
              <td><a href="/campus" class="btn btn-default btn-sm">Volver</a></td>
</table>
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
     
      
  </body>
</html>
