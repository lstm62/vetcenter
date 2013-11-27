<!-- FUNCION QUE GENERA EL CAMPO DE FECHA Y BOTON DE GUARDAR -->
<?php function btn_guardar(){?>
	<hr>
	<div class="form-group">
		<label for="fecha">Fecha de la siguiente cita:</label>
		<div class="col-sm-6">
		<input type="date" class='form-control' value='2013-12-15' id="fecha">
		</div>
		<div class="col-sm-6">
		<button class='btn btn-primary btn-block'><i class="fa fa-floppy-o"></i> Guardar</button>
		</div>
	</div>

<?php } ?>
<!-- ROW QUE CONTIENE LOS DIAGNOSTICOS Y EL NOMBRE DE LA MASCOTA -->
<div class="row">
	<div class="col-sm-4">
		<h4>Mascota:</h4>
		<select name="" class="form-control select-pet" id="">
			<option value="">Scooby Doo</option>
			<option value="">Fido</option>
			<option value="">Firulais</option>
			<option value="">Chirrungis</option>
		</select>
	</div>
	<div class="col-sm-4">
		<h4>Diagnostico clínico:</h4>
		<textarea name="" class="form-control" id="" placeholder="Diagnostico del veterinario" cols="30" rows="1"></textarea>
	</div>
	<div class="col-sm-4">
		<h4>Diagnostico laboratorista:</h4>
		<textarea name="" id="" class="form-control" placeholder="Diagnostico del laboratorio" cols="30" rows="1"></textarea>
	</div>
</div>
<br>
<div class="row">
<div class="div-center">
<!-- LISTA DE SERVICIOS DISPONIBLES -->
<div class="nav-left col-sm-4">
<ul class="nav nav-pills nav-stacked">
  <li class='active'><a href="#estetica" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Estética canina</a></li>
  <li><a href="#reproduccion" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Reproducción de caninos</a></li>
  <li><a href="#vacunacion" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Vacunación</a></li>
  <li><a href="#desparasitacion" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Desparasitación</a></li>
  <li><a href="#frontline" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Frontline</a></li>
  <li><a href="#cirugia" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Cirugía animal</a></li>
  <li><a href="#vetcomplex" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Vetcomplex</a></li>
  <li><a href="#dentalstick" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Limpieza dental</a></li>
  <li><a href="#laboratorio" data-toggle="tab"><i class="glyphicon glyphicon-tag"></i> Servicio de laboratorio</a></li>
</ul>
</div>

<!-- DETALLES DE LOS SERVICIOS -->
<div class="tab-content tab-content-right col-sm-8">

  <div class="tab-pane fade in active" id="estetica">
  	<h3>Estetica canina</h3>
  	<div class="btn-group" data-toggle="buttons">
	  <label class="btn btn-success">
	    <input type="checkbox"> Corte de pelo
	  </label>
	  <label class="btn btn-success">
	    <input type="checkbox"> Baño antipulgas
	  </label>
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="reproduccion">
	<h3>Reproducción de caninos</h3>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="vacunacion">
	<h3>Vacunación</h3>
	<div class="form-group">
		<label for="vacuna">Vacuna aplicada:</label>
		<input type="text" class='form-control' id="vacuna" placeholder='Nombre de la vacuna'>
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="desparasitacion">
  	<h3>Desparasitación</h3>
  	<div class="form-group">
		<label for="vacuna">Vacuna aplicada:</label>
		<input type="text" class='form-control' id="vacuna" placeholder='Nombre de la vacuna'>
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="frontline">
  	<h3>Frontline</h3>
  	<div class="form-group">
		<label for="vacuna">Medicamento aplicado:</label>
		<input type="text" class='form-control' id="vacuna" placeholder='Nombre del medicamento'>
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="cirugia">
  	<h3>Cirugía animal</h3>
  	<div class="form-group">
		<label for="trauma">Trauma:</label>
		<input type="text" class='form-control' id="trauma" placeholder='Trauma que presenta'>
	</div>
	<div class="form-group">
		<label for="fecha-cirugia">Fecha de la cirugía:</label>
		<input type="date" value='2013-12-10' class='form-control' id="fecha-cirugia">
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="vetcomplex">
  	<h3>Atención nutricional</h3>
  	<div class="form-group col-xs-6">
		<label for="peso">Peso:</label>
		<input type="text" class='form-control' id="peso" placeholder='Peso de la mascota'>
	</div>
	<div class="form-group col-xs-6">
		<label for="actividad">Tipo de actividad:</label>
		<input type="text" class='form-control' id="actividad" placeholder='¿Que realiza la mascota?'>
	</div>
	<div class="form-group">
		<label for="dieta">Dieta:</label>
		<textarea name="dieta" class='form-control' id="dieta" cols="30" placeholder='Indique la dieta a seguir por la mascota' rows="6"></textarea>
	</div>
	<?php btn_guardar(); ?>
  </div>

   <div class="tab-pane fade" id="dentalstick">
  	<h3>Limpieza dental</h3>
  	<div class="form-group">
		<label for="vacuna">Medicamento aplicado:</label>
		<input type="text" class='form-control' id="vacuna" placeholder='Nombre del Medicamento'>
	</div>
	<?php btn_guardar(); ?>
  </div>

  <div class="tab-pane fade" id="laboratorio">
  	<h3>Limpieza dental</h3>
  	<div class="form-group">
		<label for="estudio">Nombre del estudio:</label>
		<input type="text" class='form-control' id="estudio" placeholder='Estudio de laboratorio'>
	</div>
	<?php btn_guardar(); ?>
  </div>
</div>
</div>
</div>