<?php
require("conectar_db.php");
$id=$_GET["id"];
$sql="DELETE FROM tbl_usuarios WHERE tbl_usuarios.usu_id=$id";
mysqli_query($conexion, $sql);
header("location:../clientes.php");
?>