<?php

class formularios{

	function __construct()
	{

	}

public function colocarTitulo($seccion,$operacion) //$seccion es un numero de base cero que indica la seccion (0=facturas, 1=pagos...)
	{
		if ($operacion=="agregar")
			echo "<h3>Agregar $seccion</h3>";
		else
			echo "<h3>Editar información de $seccion</h3>";
	}

public function clientes($operacion="agregar")
{
$this->colocarTitulo("cliente",$operacion); ?>

<form class="form-horizontal" role="form">
  <div class="form-group">
  	<label for="nombre" class="col-xs-3 control-label">Nombre completo</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre del cliente">
    </div>
  </div>
  <div class="form-group">
    <label for="dom" class="col-xs-3 control-label">Domicilio</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="dom" placeholder="Calle, num, colonia">
    </div>
  </div>
  <div class="form-group">
    <label for="tel" class="col-xs-3 control-label">Teléfono fijo</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="tel" placeholder="Télefono fijo">
    </div>
  </div>
  <div class="form-group">
    <label for="cel" class="col-xs-3 control-label">Celular</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="cel" placeholder="Número de celular">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-xs-3 control-label">E-mail</label>
    <div class="col-xs-9">
      <input type="email" class="form-control" id="emali" placeholder="Introduzca el e-mail">
    </div>
  </div>
  <div class="form-group">
  	<div class="col-xs-3"></div>
    <div class="col-xs-9">
    	<?php
    		if($operacion!="agregar")
    			echo '<a href="clientes.php" class="btn btn-danger pull-left btns">Cancelar</a>';
    	?>
      <button type="submit" class="btn btn-success pull-right btns"><i class="fa fa-floppy-o"></i> Guardar</button>
    </div>
  </div>
</form>

<?php }
//FORMULARIO PARA AGREGAR/EDITAR MASCOTAS
public function mascotas($operacion="agregar")
{
$this->colocarTitulo("mascota",$operacion); ?>

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="dueno" class="col-xs-3 control-label">Dueño</label>
    <div class="col-xs-9">
      <select class='form-control' name="" id="dueno">
        <option value="">José Luis Béjar García</option>
        <option value="">Fernando Martinez Lúa</option>
        <option value="">Alonso Sandoval Zavala</option>
      </select>
    </div>
  </div>

  <div class="form-group">
  	<label for="nombre" class="col-xs-3 control-label">Nombre</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre de la mascota">
    </div>
  </div>
  <div class="form-group">
    <label for="raza" class="col-xs-3 control-label">Raza</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="raza" placeholder="Raza de la mascota">
    </div>
  </div>
  <div class="form-group">
    <label for="edad" class="col-xs-3 control-label">Edad</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="edad" placeholder="Edad de la mascota">
    </div>
  </div>
  <div class="form-group">
  	<div class="col-xs-3"></div>
    <div class="col-xs-9">
    	<?php
    		if($operacion!="agregar")
    			echo '<a href="mascotas.php" class="btn btn-danger pull-left btns">Cancelar</a>';
    	?>
      <button type="submit" class="btn btn-success pull-right btns"><i class="fa fa-floppy-o"></i> Guardar</button>
    </div>
  </div>
</form>

<?php }

public function servicios($operacion="agregar")
{
$this->colocarTitulo("servicio",$operacion); ?>

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="nombre" class="col-xs-3 control-label">Nombre</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre de la mascota">
    </div>
  </div>
  <div class="form-group">
    <label for="raza" class="col-xs-3 control-label">Raza</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="raza" placeholder="Raza de la mascota">
    </div>
  </div>
  <div class="form-group">
    <label for="edad" class="col-xs-3 control-label">Edad</label>
    <div class="col-xs-9">
      <input type="text" class="form-control" id="edad" placeholder="Edad de la mascota">
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-3"></div>
    <div class="col-xs-9">
      <?php
        if($operacion!="agregar")
          echo '<a href="servicios.php" class="btn btn-danger pull-left btns">Cancelar</a>';
      ?>
      <button type="submit" class="btn btn-success pull-right btns"><i class="fa fa-floppy-o"></i> Guardar</button>
    </div>
  </div>
</form>

<?php } //HASTA AQUI SON LOS FORMULARIOS DE CRUD

//EL SIGUIENTE CODIGO MUESTRA LOS DETALLES DE UN CLIENTE O UNA MASCOTA
public function c()//c de clientes
{
  ?>
    <h2><i class="glyphicon glyphicon-user"></i> Nombre completo del cliente</h2>
    <h3><i class="glyphicon glyphicon-home"></i> Domicilio completo del cliente</h3>
    <h4 class='col-sm-3'><i class="glyphicon glyphicon-earphone"></i> Telefono: 53-8-65-98</h4><h4 class='col-sm-3'><i class="glyphicon glyphicon-phone"></i> Celular: 331-364-8-99</h4><h4 class='col-sm-3'><i class="glyphicon glyphicon-earphone"></i> correo@mail.com.mx</h4>
    <!-- ROW QUE CONTIENE LOS DIAGNOSTICOS Y EL NOMBRE DE LA MASCOTA -->
    <br>
    <br>
    <h3 class="alert alert-info">Mascotas del cliente:</h3>

<!-- LISTA DE MASCOTAS DEL CLIENTE -->
<div class="div-center">
<div class="nav-left col-sm-4">
<ul class="nav nav-pills nav-stacked">
  <li class='active'><a href="#pet1" data-toggle="tab"><i class="fa fa-github-alt"></i> Firulais</a></li>
  <li><a href="#pet2" data-toggle="tab"><i class="fa fa-github-alt"></i> Chirrungis</a></li>
  <li><a href="#pet3" data-toggle="tab"><i class="fa fa-github-alt"></i> Scooby Doo</a></li>
</ul>
</div>

<!-- DETALLES DE LAS MASCOTAS -->
<div class="tab-content tab-content-right col-sm-8">

  <div class="tab-pane fade in active" id="pet1">
    <h2>Firulais</h2>
    <div class="row">
      <h4 class="col-sm-6">Raza: Perro Labrador</h4>
    <h4 class="col-sm-4">Edad: 2 años</h4>
    </div>
    
    <hr>
    <h4>Cartilla 0354</h4>
    <p>7 servicios en total (2 vigentes)</p>
    <div class="col-sm-6">
      <ul>
        <li class="proxima-cita"><strong>Dentalstick</strong> Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Estética canina</b>Proxima cita: 15-12-2013</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Estética canina</li>
        <li>Dentalstick</li>
        <li>Estética canina</li>
        <li>Desparasitación</li>
        <li>Vacunación</li>
      </ul>
    </div>
  </div>

  <div class="tab-pane fade" id="pet2">
    <h2>Chirrungis</h2>
    <div class="row">
      <h4 class="col-sm-6">Raza: Perro Chihuahua</h4>
    <h4 class="col-sm-4">Edad: 7 meses</h4>
    </div>
    
    <hr>
    <h4>Cartilla 4587</h4>
    <p>9 servicios en total (4 vigentes)</p>
    <div class="col-sm-6">
      <ul>
        <li class="proxima-cita"><strong>Dentalstick</strong> Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Estética canina</b>Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Cirugía</b>Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Desparasitación</b>Proxima cita: 15-12-2013</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Estética canina</li>
        <li>Dentalstick</li>
        <li>Estética canina</li>
        <li>Desparasitación</li>
        <li>Vacunación</li>
      </ul>
    </div>
    
  </div>

  <div class="tab-pane fade" id="pet3">
    <h2>Scooby Doo</h2>
    <div class="row">
      <h4 class="col-sm-6">Raza: Perro Gran Danés</h4>
    <h4 class="col-sm-4">Edad: 3 años</h4>
    </div>
    
    <hr>
    <h4>Cartilla 1352</h4>
    <p>4 servicios en total (1 vigente)</p>
    <div class="col-sm-6">
      <ul>
        <li class="proxima-cita"><b>Estética canina</b>Proxima cita: 15-12-2013</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Estética canina</li>
        <li>Dentalstick</li>
        <li>Vacunación</li>
      </ul>
    </div>
    
  </div>

</div>
</div>
<?php
}

public function det($mascota="") //genera los detalles de una mascota
{
  ?>
<h2>Nombre de la mascota</h2>
    <div class="row">
      <h4 class="col-sm-4">Dueño: Nombre del dueño</h4>
      <h4 class="col-sm-4">Raza: raza de la mascota</h4>
    <h4 class="col-sm-4">Edad: edad de la mascota</h4>
    </div>
    
    <hr>
    <h4>Cartilla 4587</h4>
    <p>9 servicios en total (4 vigentes)</p>
    <div class="col-sm-6">
      <ul>
        <li class="proxima-cita"><strong>Dentalstick</strong> Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Estética canina</b>Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Cirugía</b>Proxima cita: 15-12-2013</li>
        <li class="proxima-cita"><b>Desparasitación</b>Proxima cita: 15-12-2013</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>Estética canina</li>
        <li>Dentalstick</li>
        <li>Estética canina</li>
        <li>Desparasitación</li>
        <li>Vacunación</li>
      </ul>
    </div>
  <?php
}

public function m()//m de mascotas
{
$this->det();
}

} //termina la clase 
?>