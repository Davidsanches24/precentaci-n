<?php
	include('../class/function.php');
	if(isset($_POST['submit'])){
	    $i = explode (" ",$_POST['instructor']);
        $id = explode (" ",$_POST['id']);
        $p = explode (" ",$_POST['programa']);
        
		$field = array("No_documento"=>($i[0]*1), "ficha"=>($p[0]*1), );
		$tbl = "prog_inst";
		editar($tbl,$field,'No_documento','ficha',$id[0],$id[1]);
		header("location:../controladores/c-relacion.php");
	}
?>