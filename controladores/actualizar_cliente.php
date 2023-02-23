<?php
require("conectar_db.php");
$id=$_POST["id"];
$nom=$_POST["nom"];
$ape=$_POST["apellido"];
$nit=$_POST["nit"];
$ciudad=$_POST["ciudad"];
$tel=$_POST["telefono"];
$cupo_disponible=$_POST["cupDisp"];
$estado=$_POST["estado"];
$dir=$_POST["direccion"];

$sql="UPDATE tbl_usuarios 
SET usu_nom='$nom', usu_ape='$ape', usu_nit=$nit, usu_dir='$dir', usu_ciu_id=$ciudad, usu_tel='$tel', usu_cup=$cupo_disponible, usu_est_id=$estado
WHERE usu_id=$id";
mysqli_query($conexion, $sql);

header("location:../clientes.php")
?>