<?php
require("controladores/conectar_db.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $consulta="SELECT tbl_usuarios.*, tbl_ciudades.ciu_nom, tbl_estados.est_des  
    FROM tbl_usuarios
    INNER JOIN tbl_ciudades ON tbl_usuarios.usu_ciu_id=tbl_ciudades.ciu_id
    AND tbl_usuarios.usu_id=$id
    INNER JOIN tbl_estados ON tbl_usuarios.usu_est_id=tbl_estados.est_id
    ";
    $resultado=mysqli_query($conexion, $consulta);
    $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
}
else{
    // header("location:clientes.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="informacion-editar">
            <div class="titulo">
                <h2>Detalles de Cliente</h2>
            </div>
            <div class="contenedor-formulario">
                <p>Datos personales</p>
                <form action="controladores/actualizar_cliente.php" method="post" class="form-edit">
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Nombres</label>
                            <?php
                            echo "<input type='text' name='nom' value='".$fila["usu_nom"]."'>";
                            ?>
                        </div>
                        <div class="form-grupo">
                            <label for="">NIT/CC</label>
                            <?php
                            echo "<input type='text' name='nit' value='".$fila["usu_nit"]."'>";
                            ?>
                        </div>
                        <div class="form-grupo">
                            <label for="">Ciudad</label>
                            <select name="ciudad" id="">
                                <?php
                                echo "<option value='".$fila["usu_ciu_id"]."'>".$fila["ciu_nom"]."</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-grupo">
                            <label for="">Estado de crédito</label>
                            <select name="estado" id="">
                                <?php
                                echo "<option value='".$fila["usu_est_id"]."'>".$fila["est_des"]."</option>";
                                ?>
                            </select>
                        </div>
                        <?php
                            echo "<input type='text' style='display:none' name='id' value='".$id."'>";
                        ?>
                        <button>Guardar cambios</button>

                    </div>
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Apellidos</label>
                            <?php
                            echo "<input type='text' name='apellido' value='".$fila["usu_ape"]."'>";
                            ?>
                        </div>
                        <div class="form-grupo">
                            <label for="">Direccion</label>
                            <?php
                            echo "<input type='text' name='direccion' value='".$fila["usu_dir"]."'>";
                            ?>
                        </div>
                        <div class="form-grupo">
                            <label for="">Telefono</label>
                            <?php
                            echo "<input type='text' name='telefono' value='".$fila["usu_tel"]."'>";
                            ?>
                        </div>
                    </div>
                    <div class="form-col">
                    <div class="form-grupo">
                            <label for="">Cupo total</label>
                            <input type="number">
                        </div>
                        <div class="form-grupo">
                            <label for="">Cupo disponible</label>
                            <?php
                            echo "<input type='text' name='cupDisp' value='".$fila["usu_cup"]."'>";
                            ?>
                        </div>
                        <div class="form-grupo">
                            <label for="">Dias de gracia</label>
                            <input type="number">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <div>
</body>
</html>