@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">		
		@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    <!--¡Estás logueado!-->
		<div class='main-profile'>
	
	<form class="" action="/escribecw" method="get">
      <div class="form-group">
        <input class="form-control" type="text" name="id_usuario" value="" placeholder="id usuario">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="id_prestador" value="" placeholder="id prestador ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="descripcion" value="" placeholder="Descripción ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="calificacion" value="" placeholder="Calificación ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="nombre_usuario" value="" placeholder="Nombre usuario">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="nombre_prestador" value="" placeholder="Nombre prestador ">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Guardar en db">
    </form><br>
	
	<form class="" action="/modificacw" method="get">
	  <div class="form-group">
        <input class="form-control" type="text" name="nro" value="" placeholder="id">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="id_usuario" value="" placeholder="id usuario">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="id_prestador" value="" placeholder="id prestador ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="descripcion" value="" placeholder="Descripción ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="calificacion" value="" placeholder="Calificación ">
      </div>
	  <div class="form-group">
        <input class="form-control" type="text" name="nombre_usuario" value="" placeholder="Nombre usuario">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="nombre_prestador" value="" placeholder="Nombre prestador ">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Modificar en db">
    </form><br>
	
	<form class="" action="/borracw" method="get">
      <div class="form-group">
        <input class="form-control" type="text" name="nro" value="" placeholder="id">
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Borrar en db">
    </form>
		</div>
    </div>
</div>
@endsection
