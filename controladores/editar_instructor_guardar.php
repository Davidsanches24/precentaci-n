<?php
	include('../class/function.php');
	if(isset($_POST['submit'])){
	    $p = explode (" ",$_POST['ambiente']);
		$field = array("No_documento"=>$_POST['No_documento'], "nom_instructor"=>$_POST['nom_instructor']);
		$tbl = "instructores";
		edit($tbl,$field,'No_documento',$_POST['id']);
		header("location:c-editar_instructores.php");
	}
?>