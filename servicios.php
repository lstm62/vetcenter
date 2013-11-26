<!doctype html>
<html lang="en">
<?php include('head.php'); ?>
<body>
	<div class="container">
		<div class="div-contenido">
			<?php include('navbar.html') ?>
			<ul class="nav nav-tabs">
			  <li class='active'><a href="#clientes" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i> Todos los servicios</a></li>
			  <li><a href="#add" data-toggle="tab"><i class="fa fa-plus-circle"></i> Nuevo servicio a mascota</a></li>
			</ul>

		<!-- Tab panes -->
		<div class="tab-content" style="border-bottom:1px solid #dadada; border-left:1px solid #dadada; border-right:1px solid #dadada;">
		  <div class="tab-pane fade in active" id="clientes">
			<table class="table table-striped">
				<tr>
					<td></td>
					<td>Nombre del servicio</td>
					<td>Descripción</td>
					<td>Costo</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Estética canina</td>
					<td>Descripción del servicio</td>
					<td>$300.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Reproducción de caninos</td>
					<td>Descripción del servicio</td>
					<td>$1500.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Vacunación</td>
					<td>Descripción del servicio</td>
					<td>$500.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Desparasitación</td>
					<td>Descripción del servicio</td>
					<td>$400.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Frontline (Antipulgas trimestral)</td>
					<td>Descripción del servicio</td>
					<td>$120.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Cirugía animal</td>
					<td>Descripción del servicio</td>
					<td>$4800.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Vetcomplex (Atencion nutricional)</td>
					<td>Descripción del servicio</td>
					<td>$600.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Limpieza dental (Dentalstick)</td>
					<td>Descripción del servicio</td>
					<td>$700.00</td>
				</tr>
				<tr>
					<td><a href="editar.php?s=servicios" title='Editar datos de servicio' class="btn btn-default btn-sm"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td>Servicio de laboratorio</td>
					<td>Descripción del servicio</td>
					<td>$1150.00</td>
				</tr>
			</table>
		  </div>
		  <div class="tab-pane fade padding-pane" id="add">
		  	<?php include('nuevo-servicio.php');	?>
		  </div>
		</div>
		</div>
	</div>
</body>
</html>