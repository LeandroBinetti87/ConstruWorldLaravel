// 1. Capturo al select de países
	console.log('Selección de países');
	
	fetch('https://restcountries.eu/rest/v2/all')
		.then(function (response) {
			return response.json();
		})
		.then(function (data) {	
			var selectPaises = document.querySelector('[name=country]');
			for (var pais of data) {
				selectPaises.innerHTML = selectPaises.innerHTML + '<option value=' + pais.alpha2Code + '>' + pais.name + '</option>';
			}
			console.log(selectPaises.innerHTML);
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