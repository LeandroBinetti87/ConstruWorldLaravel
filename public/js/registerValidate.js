// Capturo el formulario
var elFormu = document.querySelector('form');

// Capturo los campos del formulario y convirtiendo a un array
var losCampos = Array.from(elFormu.elements);

console.log("LOS CAMPOS: " + losCampos);

for (var i=0; i<losCampos.length; i++){
	console.log("Campo " + i + " " + losCampos[i].name);
}

// Sacando al último elemento de un array
//losCampos.pop();

// Regex para email
var regexEmail = /\S+@\S+\.\S+/;

// Objeto que acumula los errores
var errores = {};

losCampos.forEach(function (unCampo) {
	console.log("ForEach " + unCampo.name + " " + unCampo.type);
	
	unCampo.addEventListener('change', function () {	
		console.log("Evento blur detectado");
	});
});


