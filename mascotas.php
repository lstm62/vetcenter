<!doctype html>
<html lang="es">
<?php include('head.php') ?>
<body>
	<div class="container">
		<?php include('navbar.html') ?>
		<div class="div-contenido">
		<ul class="nav nav-tabs">
		  <li class='active'><a href="#mascotas" data-toggle="tab"><i class="fa fa-github-alt"></i> Todos las mascotas</a></li>
		  <li><a href="#add" data-toggle="tab"><i class="fa fa-plus-circle"></i> Agregar nueva mascota</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content" style="border-bottom:1px solid #dadada; border-left:1px solid #dadada; border-right:1px solid #dadada;">
		  <div class="tab-pane fade in active" id="mascotas">
			<table class="table table-striped">
				<tr>
					<td><i class="glyphicon glyphicon-edit"></i></td>
					<td>Nombre</td>
					<td>Raza</td>
					<td>Edad</td>
					<td><i class="glyphicon glyphicon-user"></i> Dueño</td>
					<td><i class="glyphicon glyphicon-certificate"></i> Servicio a mascota</td>
				</tr>

				<tr>
					<td><a href="editar.php?s=mascotas" title='Editar datos de mascota' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=m">Scooby doo</a></td>
					<td>Perro Gran Danés</td>
					<td>3 años</td>
					<td>José Luis Béjar García</td>
					<td><a href="servicios.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				<tr>
					<td><a href="editar.php?s=mascotas" title='Editar datos de mascota' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=m">Fido</a></td>
					<td>Perro Salchicha</td>
					<td>1 año</td>
					<td>José Luis Béjar García</td>
					<td><a href="servicios.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				<tr>
					<td><a href="editar.php?s=mascotas" title='Editar datos de mascota' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=m">Firulais</a></td>
					<td>Perro Labrador</td>
					<td>2 años</td>
					<td>Fernando Martínez Lúa</td>
					<td><a href="servicios.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				<tr>
					<td><a href="editar.php?s=mascotas" title='Editar datos de mascota' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=m">Chirrungis</a></td>
					<td>Perro Chihuahua</td>
					<td>7 meses</td>
					<td>Alonso Sandoval Zavala</td>
					<td><a href="servicios.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				
			</table>
		  </div>
		  <div class="tab-pane fade" id="add">
		  	<div class="col-sm-4">
		  		<?php $frm->mascotas();	?>
		  	</div>
		  </div>
		  <div class="tab-pane fade" id="servicios">...</div>
		</div>
	</div>
	</div>
</body>
</html>