<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="sidebar">
            <img src="img/logo_usuario.png" alt="" class="logo">
            <ul class="lista">
                <li class="">
                    <a href="index.php" class="li-link">

                        <span>Inicio</span>
                    </a>
                </li>
                <li class="">
                    <a href="clientes.php" class="li-link">

                        <span>Clientes</span>
                    </a>
                </li>
                <li class="">
                    <a href="nuevoCredito.php" class="li-link">

                        <span>créditos</span>
                    </a>
                </li>
            </ul>
            <button>Cerrar sesión</button>
        </div>
        <div class="informacion">
            <div class="titulo">
                <h2>Clientes</h2>
            </div>
            <div class="contenedor-buscar-crear">
                <form action="" method="get">
                    <input type="text" placeholder="Nobre. NIT o CC">
                    <button>buscar</button>
                </form>
                <button><a href="nuevoCliente.php">Crear cliente</a></button>
            </div>
            <div class="tabla">
                <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                        
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">NIT</th>
                        <th scope="col">Direeción</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Cupo disponible</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("controladores/conectar_db.php");
	
                        $consulta="SELECT tbl_usuarios.*, tbl_ciudades.ciu_nom, tbl_estados.est_des  
                        FROM tbl_usuarios
                        INNER JOIN tbl_ciudades ON tbl_usuarios.usu_ciu_id=tbl_ciudades.ciu_id
                        INNER JOIN tbl_estados ON tbl_usuarios.usu_est_id=tbl_estados.est_id
                        ";
                        $resultado=mysqli_query($conexion, $consulta);
                        
                        while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			
                            echo "<tr>";
                            echo "<td>".$fila['usu_nom']."</td>";
                            echo "<td>".$fila['usu_ape']."</td>";
                            echo "<td>".$fila['usu_nit']."</td>";
                            echo "<td>".$fila['usu_dir']."</td>";
                            echo "<td>".$fila['ciu_nom']."</td>";
                            echo "<td>".$fila['usu_tel']."</td>";
                            echo "<td>".$fila['usu_cup']."</td>";
                            echo "<td>".$fila['est_des']."</td>";
                            echo "<td><button><a href='editar.php'>E</a></button><button><a href=''>D</a></button></td>";
                            echo "</tr>";   
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>