// Capturo el formulario
var elFormu = document.querySelector('form');

// Capturo los campos del formulario y convirtiendo a un array
var losCampos = Array.from(elFormu.elements);

console.log("LOS CAMPOSS: " + losCampos);

// Sacando al Ãºltimo elemento de un array
losCampos.pop();

for (var i=0; i<losCampos.length; i++){
	console.log("Campo " + i + " " + losCampos[i].name);
}

// Regex para email
var regexEmail = /\S+@\S+\.\S+/;

// Objeto que acumula los errores
var errores = {};

	losCampos[1].addEventListener('change', function () {	
		console.log("Evento blur detectado");
	});
	
	losCampos[2].addEventListener('blur', function () {	
		console.log("Evento blur detectado");
	});
	
	
	losCampos[3].addEventListener('click', function () {	
		console.log("Evento blur detectado");
	});

/*losCampos.forEach(function (unCampo) {
	// div del error
	var divError = null;
	
	divError = unCampo.nextElementSibling; //En nuestro caso, es siempre el siguiente elemento
	
	//console.log("ForEach " + unCampo.name + " " + unCampo.type);
	
	unCampo.addEventListener('blur', function () {	
		console.log("Evento detectado");
		
		var valorDelCampo = unCampo.value.trim();
		
		// valido si el campo está vacío
		if (valorDelCampo === '') {
			this.classList.add('is-invalid'); // agrego clase is-invalid
			divError.style.display = 'block'; // muestro el div del error
			divError.innerText = "Campo obligatorio"; // seteo el texto del error en sí
			
			// Sumar una key al objeto de errores
			errores[this.name] = true;
		} else {
			// Si no está vacío revierto lo anterior
			this.classList.remove('is-invalid');
			divError.style.display = 'none';
			divError.innerText = '';
			
			// Si no hay error elimino la key en el objeto de errores
			delete errores[this.name];
			
			// Si el campo es el de email
			if (this.name === 'email') {
				// valido que el texto sea un formato de email válido
				if (!regexEmail.test(valorDelCampo)) {
					this.classList.add('is-invalid'); // agrego clase is-invalid
					divError.style.display = 'block'; // muestro el div del error
					divError.innerText = "Ingresá un email válido"; // seteo el texto del error en si

					// Sumar una key al objeto de errores
					errores[this.name] = true;
				} else {
					// Si es un formato de email válido
					this.classList.remove('is-invalid');
					divError.style.display = 'none';
					divError.innerText = '';
				}
			}
		}
	});
	console.log(errores);
});

// Valido cuando se envíe el formulario
elFormu.addEventListener('submit', function (event) {
	losCampos.forEach(function (unCampo) {
		var valorFinalDelCampo = unCampo.value.trim();

		if (valorFinalDelCampo === '') {
			errores[unCampo.name] = true;
		}
	});

	if (Object.keys(errores).length > 0) {
		alert('Campos vacíos');
		console.log(errores);
		event.preventDefault();
	}
})*/
