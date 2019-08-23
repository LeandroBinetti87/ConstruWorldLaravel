<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
				//echo "UPLOAD_ERR_OK";
				$nombre_ar = $_FILES["archivo"]["name"];
				$archivo = $_FILES["archivo"]["tmp_name"];
				$ext = pathinfo($nombre_ar, PATHINFO_EXTENSION);

				//echo "La extensión es: " . $ext . "<br>";

				//$miArchivo = dirname(__FILE__);
				//$miArchivo = $miArchivo. "\\". "usuarios" . "\\" . "JosePaso.bmp"; //El nombre de la foto es el nombre del usuario. Hay que crear el directorio.
				$miArchivo = "usuarios/" . $data['name'] . $data['surname']. "." . $ext;
				//echo "miArchivo es: " . $miArchivo . "<br>";
				if($ext=="jpg" || $ext=="bmp"){
					move_uploaded_file($archivo, $miArchivo);
				} else {
					$mensaje_error = $mensaje_error . "Formato de imagen incorrecto<br>";
					$valido = false;
				}

			} else {
				$mensaje_error = $mensaje_error . "Error carga foto de perfil<br>";
				$valido = false;
			}
		
        return User::create([
            'name' => $data['name'],
			'surname' => $data['surname'],
			'dni' => $data['dni'],
			'genero' => $data['genero'],
			'birthdate' => $data['birthdate'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'ext' => $ext,
			'userkind' => $data['userkind'],
			'profesion' => $data['profesion'],
			'barrio' => $data['barrio'],
        ]);
    }
}
