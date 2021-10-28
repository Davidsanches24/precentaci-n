<!doctype html>
<html>

<head>

	<title>Editar </title>

</head>

<body>
	<div class="main-wrapper">
		<h1>Editar Registros de Instructores </h1>
		<br><br>

		<?php
		include("../class/function.php");
		?>
		<div class="containe1">

		</div>
		<table class="table">
			<thead><br>
				<th>No Documento</th>
				<th>Nombre y Apellidos</th>

				<th>actualizar</th>
				<th>eliminar</th>
			</thead>
			<tbody>
				<?php
				$sql = "select * from instructores";
				$result = db_query($sql);
				while ($row = mysqli_fetch_object($result)) {
				?>
					<tr>
						<td data-label="No_documento:"><?php echo $row->No_documento; ?></td>
						<td data-label="Nombre y Apellidos:"><?php echo $row->nom_instructor; ?></td>

						<td data-label="Opcion"><a href="../vistas/editar_instructores.php?id=<?php echo $row->No_documento; ?>">
								<input type="submit" class="btn btn-primary btn-block" name="submit" value="actualizar"></a></td>
						<td data-label="eliminar"><a href="../vistas/el-instructor.php?ad=<?php echo $row->No_documento; ?>">
								<input type="submit" name="submit" value="Eliminar"></a></td>



					</tr>
			</tbody>
				<?php } ?>

				<a href="../index.php">
					<input type="submit" class="btn btn-primary btn-block" name="submit" value="Volver"></a>
				<br><br>
		</table>
	</div>
</body>

</html>