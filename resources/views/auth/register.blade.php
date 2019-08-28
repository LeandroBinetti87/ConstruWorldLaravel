@extends('layouts.apps')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrate acá, para poder contratar servicios') }}</div>
                <div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
						<br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								<div class="invalid">
									<!-- Mensaje de error -->
								</div>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>
                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
								<div class="is-invalid">
									<!-- Error -->
								</div>
							</div>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

						<div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
								<div class="is-invalid">
									<!-- Error -->
								</div>
                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                            <div class="col-md-6">
							<select name="genero" class="form-control"><option>Femenino</option><option>Masculino</option><option>Travesti</option><option>Otro</option></select>
                                <div class="is-invalid">
									<!-- Error -->
								</div>
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row" style="display:none;">
                            <label for="userkind" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de usuario') }}</label>

                            <div class="col-md-6">
                                <input id="userkind" type="text" class="form-control" name="userkind" value="usuario" required autocomplete="userkind" autofocus>
								<div class="is-invalid">
									<!-- Error -->
								</div>
                                <input type="text" class="form-control" name="userkind" value="usuario" required autocomplete="userkind" autofocus>

                                @error('userkind')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row" style="display:none;">
                            <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesión') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="profesion" value="-" required autocomplete="profesion" autofocus>
								<div class="invalid">
									<!-- Mensaje de error -->
								</div>
                            </div>
                        </div>
						
						<div class="form-group row">
						<label for="country" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>
						<div class="col-md-6">
								<select name="country" class="form-control"><option>Elegí país</option></select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
							    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="state" name="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>
                        <div class="col-md-6">
                            <select name="state" class="form-control"><option>Elegí una provincia</option></select>
                                            @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                         </div>
                        </div>



						<div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control" name="birthdate" value="{{ old('birthdate') }}" placeholder="AAAA-MM-DD" required autocomplete="birthdate" autofocus>
								<div class="is-invalid">
									<!-- Error -->
								</div>
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de E-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
								<div class="invalid">
									<!-- Error -->
								</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
								<div class="invalid">
									<!-- Error -->
								</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

						<div>
							<label class="col-md-4 col-form-label text-md-right"for="archivo">Imagen de perfil (bmp): </label>
							<div class="col-md-6">
								<input class="form-control" type="file" name="archivo"><br>
							</div>
						</div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/getCountries.js"></script>
<script src="js/registerValidate.js"></script>
<script src="/js/getState.js"></script>

<script>
window.addEventListener('load', function() {
	var country = document.querySelector('[name=country]');
	var state = document.querySelector('[name=state]');
	var labelprov = document.querySelector('[name=provincia]');
	console.log("El pais es: " + country.value);
	console.log("El estado es: " + state.value);
	state.style.display = 'none';
	labelprov.style.display = 'none';

	country.addEventListener('change', function () {	
		console.log("Evento change detectado");
		country = document.querySelector('[name=country]');
		console.log("PAIS " + country.value);
		if (country.value == 'Argentina'){
			state.style.display = 'block';
			labelprov.style.display = 'block';
		} else {
			state.style.display = 'none';
			labelprov.style.display = 'none';
		}
	});
})
</script>
@endsection

