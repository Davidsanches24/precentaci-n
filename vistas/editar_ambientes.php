<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

	<link rel="stylesheet" href="../css/estilo2.css">

</head>

<body>
	<div class="main-wrapper">
		<h1>Editar Registros Ambientes</h1>
		<br><br>
		<?php
		include("../class/function.php");
		$id = $_GET['id'];
		select_id('ambientes', 'no', $id);
		?>
		<form action="../controladores/editar_ambiente_guardar.php" method="post">
			<div class="containe1">

			</div>
			<table class="table">
				<thead><br>
					<th>No</th>
					<th>Sede</th>
					<th>Nombre de Aula</th>
					<th>Opciones</th>
				</thead>
				<tbody>
					<tr>
						<td data-label="No:"><input type="text" value="<?php echo $row->no; ?>" readonly name="no"></td>
						<td data-label="Sede:"><input type="text" value="<?php echo $row->cede; ?>" name="cede"></td>
						<td data-label="Nombre de Aula:"><input type="text" value="<?php echo $row->nom_aula; ?>" name="nom_aula"></td>
						<td data-label="opciones:"><input type="hidden" value="<?php echo $id; ?>" name="id">
							<input type="submit" name="submit">
						</td>
						


				</tbody>
			</table>
		</form>


	</div>
</body>

</html>