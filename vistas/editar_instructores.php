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
<h1>Editar Registros Instructores  </h1>
<br><br>
<?php 
include("../class/function.php");
$id = $_GET['id'];
select_id('instructores','No_documento',$id);
?>


<form action="../controladores/editar_instructor_guardar.php" method="post">
    <div class="containe1">

    </div>
        <table class="table" >
            <thead><br>
                            <th>No Documento</th>
                            <th>Nombre y Apellidos</th>
                            <th>Opcion</th>
            </thead>
            <tbody>
            <tr>
            <td  data-label="No_documento:" ><input type="text" value="<?php echo $row->No_documento;?>" maxlength="11" name="No_documento"></td>
            <td  data-label="Nombre y Apellidos:" ><input type="text" value="<?php echo $row->nom_instructor;?>" maxlength="25" name="nom_instructor"></td>
            
    <td  data-label="opcion:" ><input type="hidden" value="<?php echo $id;?>" name="id">
	<input type="submit" name="submit"></td>
    </tbody>
    </table>
    
	
</form>



</div>
</body>
</html>