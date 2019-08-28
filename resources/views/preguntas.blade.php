@extends('layouts.apps')

@section('content')
<div>
<h1 style="margin-left: 40px;">Preguntas frecuentes</h1>
</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="accordion" id="accordionPreguntas">
						<div class="card">
							<div class="card-header">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseUno" aria-expanded="false" aria-controls="collapseUno">
	 									¿Cómo selecciona Construworld sus proveedores?
									 </button>
								 </h5>
								</div>

						<div id="collapseUno" class="collapse" aria-labelledby="headingUno" data-parent="#accordionPreguntas">
							<div class="col-md-12 card-body2">
								Mediante una entrevista en profundidad se evalúa su capacidad técnica y operativa, honestidad y cordialidad. También se investigan referencias e historial laboral.
						    Asimismo con las calificaciones que otorgan los usuarios del servicio, se cuenta con una una evaluación permanente y dinámica de cada prestador acerca de su idoneidad, buen trato y precios justos.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
					    ¿Qué ventajas ofrece Construworld?
							</button>
						</h5>
					</div>

					<div id="collapseDos" class="collapse" aria-labelledby="headingDos" data-parent="#accordionPreguntas">
						<div class="col-md-12 card-body2">
					    <ol>
					      <li>Reune prestadores calificados, seleccionados de manera idónea;</li>
					      <li>Que se encuentran disponibles mediante un click, o a traves de nuestra central telefónica;</li>
					      <li>Atención de su consulta en 48hs o menos;</li>
					      <li>Servicios de urgencia;</li>
					      <li>Presupuesto sin cargo en domicilio;</li>
					      <li>Lista de precios orientativos por rubros;</li>
    					</ol>
						</div>
					</div>
				</div>

					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
	    					¿Quiénes pueden utilizar Construworld?
							</button>
						</h5>
					</div>

					<div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordionPreguntas">
						<div class="col-md-12 card-body2">
	    			Cualquier persona mayor de 18 años, residente en CABA y área metropolitana (previa aceptación de los Términos de Uso de Servicios).
					</div>
				</div>
			</div>

				<div class="card">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
					    ¿Construworld emite facturas por los servicios?
							</button>
						</h5>
					</div>

				<div id="collapseCuatro" class="collapse" aria-labelledby="headingCuatro" data-parent="#accordionPreguntas">
					<div class="col-md-12 card-body2">
				    Los prestadores de Construworld son PyMEs o trabajadores independientes habilitados, por los que ellos se encuentran obligados a emitir facturas por los trabajos realizados.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
						¿Qué puedo hacer si tengo un problema o estoy a disgusto con el servicio o trabajo ejecutado?
					</button>
				</h5>
			</div>

				<div id="collapseCinco" class="collapse" aria-labelledby="headingCinco" data-parent="#accordionPreguntas">
					<div class="col-md-12 card-body2">
					Si el trabajo difiere al presupuestado y acordado por ambas partes, quedó incompleto, no llegó a realizarse u otros, nuestro Departamento Legales se encuentra a disposición para brindar asesoramiento a nuestros usuarios.
					</div>
				</div>
			</div>

				<div class="card">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
		    			¿Puedo trabajar para Construworld?
						</button>
					</h5>
				</div>

				<div id="collapseSeis" class="collapse" aria-labelledby="headingSeis" data-parent="#accordionPreguntas">
					<div class="col-md-12 card-body2">
					Si vos o tu empresa quieren formar parte de Construworld, contactanos  <a href="contacto">aquí</a> y comenzaremos con el proceso de admisión.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
