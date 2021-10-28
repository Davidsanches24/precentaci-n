<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

        <link rel = "stylesheet" href ="../css/estilo2.css">
        

</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros  </h1>
<br><br>
<?php 
include("../class/function.php");
$id = $_GET['id'];
select_id('programas','ficha',$id);
?>
<form action="../controladores/editar_programas_guardar.php" method="post">
<div class="containe1">

</div>
	<table class="table" >
		<thead><br>
		

		<th>Ficha</th>
		<th >Nombre de Programa</th>
		
		<th >Opciones</th>
	</thead>
    <tbody>
            <tr>
            <td  data-label="Ficha:" ><input type="text" value="<?php echo $row->ficha;?>" maxlength="10" name="ficha"></td>
            <td  data-label="Nombre de Programa:" ><input type="text" maxlength="15" value="<?php echo $row->nom_programa;?>" name="nom_programa"></td>
                    <td  data-label="Opcion:" ><input type="hidden" value="<?php echo $id;?>" name="id">
	<input type="submit" name="submit"></td>
	

	
    
</form>


</div>
</body>
</html>