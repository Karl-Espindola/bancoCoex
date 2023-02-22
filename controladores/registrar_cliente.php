<?php
require("conectar_db.php");

$nom=$_POST["nom"];
$ape=$_POST["apellido"];
$nit=$_POST["nit"];
$ciudad=$_POST["ciudad"];
$tel=$_POST["telefono"];
$cupo_disponible=$_POST["cupDisp"];
$estado=$_POST["estado"];
$dir=$_POST["direccion"];

$sql="INSERT INTO tbl_usuarios (usu_nom, usu_ape, usu_nit, usu_dir, usu_ciu_id, usu_tel, usu_cup, usu_est_id) 
VALUES ('".$nom."','".$ape."','.$nit.','".$dir."','".$ciudad."','".$tel."','.$cupo_disponible.','.$estado.') ";
$regis=mysqli_query($conexion, $sql);

header('location:../clientes.php');
?>