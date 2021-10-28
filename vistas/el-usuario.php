<?php
include("../class/el-usuario.php");
$id=$_GET['id'];
Eliminausuario::Eliminar($id);
