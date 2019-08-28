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
			<?php echo $resultadoABM ?><br><br>
			<a href="/cwdbuser">Volver a ABM<a>
		</div>
    </div>
</div>
@endsection
