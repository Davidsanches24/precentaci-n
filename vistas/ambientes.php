<!doctype html>
<html>
<head>

<title>Editar </title>

</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros de Ambientes </h1>
<br><br>

<?php
	include("../class/function.php");
?>
<div class="containe1">

</div>
	<table class="table" >
		<thead><br>
		<th >No</th>
		<th >Sede</th>
		<th >Nombre de Aula</th>
		<th >actualizar</th>
		<th >eliminar</th>
	</thead>
	
<?php 
	$sql = "select * from ambientes";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tbody><tr>
				<td data-label="No:"><?php echo $row->no;?></td>
                <td data-label="Sede:"><?php echo $row->cede;?></td>
                <td data-label="Ambiente"><?php echo $row->nom_aula;?></td>
                <td data-label="Opcion"><a href="../vistas/editar_ambientes.php?id=<?php echo $row->no; ?>">
				<input type="submit" class="btn btn-primary btn-block"  name="submit" value="actualizar"></a></td>
				<td data-label="eliminar"><a href="../vistas/el-ambientes.php?ad=<?php echo $row->no; ?>">
				<input type="submit"  name="submit" value="Eliminar"></a></td> 
				</tbody>
	<?php } ?>
	
	<a  href="../index.php">
<input type="submit" class="btn btn-primary btn-block"  name="submit" value="Volver"></a>
	<br><br>
	
</table>
</div>
</body>
</html>