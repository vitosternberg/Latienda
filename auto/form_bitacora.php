
<?php include "../php/plantilla.php";?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 p-5">
			<div class=display-3>Solicitud de cambio</div>
			<form action="./procesa_bitacora.php" method="POST">
				<label for="usuario"><strong>ID Ususario solicitante</strong></label><br>
				<label for="start"><strong>Fecha ingreso solicitud</strong></label>
				<div class="mb-3">
				<input type="date" id="start" name="fecha_sol" value="2018-07-22" min="2021-09-01" max="2022-12-31">
				</div>
				<label for="asunto"><strong>Asunto del cambio</strong></label>
				<div class="mb-3">
				<input type="text" name="asunto">
				</div>
				<label for="asunto"><strong>Describa el alcance del cambio</label>
				<div class="mb-3">
				  <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="2"></textarea>
				</div>
				<div class="mb-3">
				<label for="asunto"><strong>Seleccione el tipo de cambio</strong></label>
					<div class="form-check" name="tipo_cambio">
					  <input class="form-check-input" type="radio" name="tipo_cambio" value="Urgente" id="flexRadioDefault1">
					  <label class="form-check-label" for="flexRadioDefault1">
						Cambio Urgente
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="tipo_cambio" value="Normal" id="flexRadioDefault2" >
					  <label class="form-check-label" for="flexRadioDefault2">
						Cambio Normal
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="tipo_cambio" value="Estandar" id="flexRadioDefault3" >
					  <label class="form-check-label" for="flexRadioDefault2">
						Cambio Estandar
					  </label>
					</div>
				</div>
				<div class="mb-3">
				<label for="asunto"><strong>Seleccione Autoridad cambio</strong></label>
					<select class="form-select"  name="aut_cambio">
					  <option value="FMorales">Felipe Morales</option>
					  <option value="CCerda">Claudia Cerda</option>
					  <option value="AAlegria">Alejandra Alegria</option>
					</select>
				</div>
				<div class="mb-3">
					<p class="login button pt-2"> 
						<input type="submit" value="Enviar Solicitud" /> 
					</p>
				</div>
			</form>
		</div><!--fin col2-->
		<div class="col-md-3"></div>
	</div>
</div>