// 1. Capturo al select de países
	console.log('Selección de provincias');

	fetch('https://dev.digitalhouse.com/api/getProvincias')
		.then(function (response) {
			return response.json();
		})
		.then(function (data) {

			var selectState = document.querySelector('[name=state]');
			for (var state of data.data) {
				console.log(state.state)
				//selectState.innerHTML += '<option>' + state.state + '</option>';
				//console.log("Prov: " + state.state);
			}
			//console.log(selectPaises.innerHTML);
		})
		.catch(function (error) {
			console.log(error);
		});
	console.log ("fin");

// Forma de insertar países al select - long version
/*
	var elOption = document.createElement('option');
	var nombrePais = document.createTextNode(pais.name)
	elOption.value = pais.alpha2Code;
	elOption.append(nombrePais);
	selectPaises.appendChild(elOption);
*/

// Forma de insertar países al select - short version
// selectPaises.innerHTML += '<option value=' + pais.alpha2Code + '>' + pais.name + '</option>';
