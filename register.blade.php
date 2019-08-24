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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

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
                            <select name="genero" class="form-control">
                              <option value="F">Femenino</option>
                              <option value="M">Masculino</option>
                              <option value="O">Otro</option>
                            </select>
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
                                <input id="userkind" type="text" class="form-control @error('userkind') is-invalid @enderror" name="userkind" value="usuario" required autocomplete="userkind" autofocus>

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
                                <input id="profesion" type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" value="-" required autocomplete="profesion" autofocus>

                                @error('profesion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="barrio" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                            <div class="col-md-6">
                                <!--<input id="barrio" type="text" class="form-control @error('barrio') is-invalid @enderror" name="barrio" value="{{ old('barrio') }}" required autocomplete="barrio" autofocus>-->
                                <select name="country" class="form-control @error('country') is-invalid @enderror">
                                  <option value="">Elegí un país</option>
                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

						<div>
							<label class="col-md-4 col-form-label text-md-right"for="archivo">Imagen de perfil (bmp)</label>
							<div class="col-md-6">
								<input class="form-control" type="file" name="archivo"><br>
							</div>
						</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
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
<!--<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
<script src="js/getCountries.js"></script>
<!--<script src="js/registerValidate.js"></script>-->
@endsection
