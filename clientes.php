<!doctype html>
<html lang="es">
<?php include('head.php'); ?>
<body>
	<div class="container">
	<?php include('navbar.html') ?>
	<div class="div-contenido">
		<ul class="nav nav-tabs">
		  <li class='active'><a href="#clientes" data-toggle="tab"><i class="fa fa-group"></i> Todos los clientes</a></li>
		  <li><a href="#nuevo-cliente" data-toggle="tab"><i class="fa fa-plus-circle"></i> Agregar nuevo cliente</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content" style="border-bottom:1px solid #dadada; border-left:1px solid #dadada; border-right:1px solid #dadada;">
		  <div class="tab-pane fade in active" id="clientes">
			<table class="table table-striped">
				<tr>
					<td><i class="glyphicon glyphicon-edit"></i></td>
					<td><i class="glyphicon glyphicon-user"></i> Nombre</td>
					<td><i class="glyphicon glyphicon-home"></i> Domicilio</td>
					<td><i class="glyphicon glyphicon-earphone"></i> Teléfono fijo</td>
					<td><i class="glyphicon glyphicon-phone"></i> Celular</td>
					<td><i class="glyphicon glyphicon-comment"></i> E-mail</td>
					<td><i class="glyphicon glyphicon-certificate"></i> Agregar una mascota</td>
				</tr>

				<tr>
					<td><a href="editar.php?s=clientes" title='Editar datos de cliente' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=c">José Luis Béjar García</a></td>
					<td>Calle San Lorenzo N° 135, Col. Cristo Rey</td>
					<td>53-1-88-99</td>
					<td>353-102-65-85</td>
					<td>bejar@mail.com.mx</td>
					<td><a href="mascotas.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				<tr>
					<td><a href="editar.php?s=clientes" title='Editar datos de cliente' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=c">Fernando Martínez Lúa</a></td>
					<td>Calle Pípila N° 84, Col. Barrio de abajo</td>
					<td>51-8-45-98</td>
					<td>351-236-98-55</td>
					<td>fml_raiders@hotmail.com</td>
					<td><a href="mascotas.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				<tr>
					<td><a href="editar.php?s=clientes" title='Editar datos de cliente' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="detalle.php?d=c">Alonso Sandoval Zavala</a></td>
					<td>Calle Gladiola 55, Col. La purisima</td>
					<td>53-5-23-65</td>
					<td>353-698-75-44</td>
					<td>chachas99@yahoo.com.mx</td>
					<td><a href="mascotas.php#add" class="btn btn-success btn-sm">Agregar</a></td>
				</tr>
				
			</table>
		  </div>
		  <div class="tab-pane fade" id="nuevo-cliente">
		  	<div class="col-sm-4">
		  		<?php $frm->clientes();	?>
		  	</div>
		  </div>
		  <div class="tab-pane fade" id="servicios">...</div>
		</div>
	</div>
	</div>
	
</body>
</html>