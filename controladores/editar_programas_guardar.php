<?php
	include('../class/function.php');
	if(isset($_POST['submit'])){
	    $p = explode (" ",$_POST['instructor']);
		$field = array("ficha"=>$_POST['ficha'], "nom_programa"=>$_POST['nom_programa']);
		$tbl = "programas";
		edit($tbl,$field,'ficha',$_POST['id']);
		header("location:c-editar_programas.php");
	}
?>