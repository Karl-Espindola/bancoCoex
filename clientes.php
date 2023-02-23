<?php
if(isset($_GET["cli"])){
    $cli=$_GET["cli"];
    $id=$_GET["id"];
}
else{
    $cli=false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <div class="sidebar">
            <div class="ico-lista">
                <img src="img/logo_usuario.png" alt="" class="logo">
                <ul class="lista">
                    <li class="">
                        <a href="index.php" class="li-link">
                            <svg fill="#888686" width="25px" height="25px" viewBox="-4.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>home</title> <path d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z"></path> </g></svg>    
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="clientes.php" class="li-link">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z" stroke="#888686" stroke-width="2"></path> <path d="M3 21C3.95728 17.9237 6.41998 17 12 17C17.58 17 20.0427 17.9237 21 21" stroke="#888686" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                            <span>Clientes</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="nuevoCredito.php" class="li-link">
                            <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13 5C13 6.10457 10.5376 7 7.5 7C4.46243 7 2 6.10457 2 5M13 5C13 3.89543 10.5376 3 7.5 3C4.46243 3 2 3.89543 2 5M13 5V9.45715C11.7785 9.82398 11 10.3789 11 11M2 5V17C2 18.1046 4.46243 19 7.5 19C8.82963 19 10.0491 18.8284 11 18.5429V11M2 9C2 10.1046 4.46243 11 7.5 11C8.82963 11 10.0491 10.8284 11 10.5429M2 13C2 14.1046 4.46243 15 7.5 15C8.82963 15 10.0491 14.8284 11 14.5429M22 11C22 12.1046 19.5376 13 16.5 13C13.4624 13 11 12.1046 11 11M22 11C22 9.89543 19.5376 9 16.5 9C13.4624 9 11 9.89543 11 11M22 11V19C22 20.1046 19.5376 21 16.5 21C13.4624 21 11 20.1046 11 19V11M22 15C22 16.1046 19.5376 17 16.5 17C13.4624 17 11 16.1046 11 15" stroke="#888686" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <span>créditos</span>
                        </a>
                    </li>
                </ul>

            </div>
            <button class="btnA">Cerrar sesión</button>
        </div>
        <div class="informacion">
            <div class="titulo">
                <h2>Clientes</h2>
            </div>
            <div class="contenedor-buscar-crear">
                <form action="controladores/buscar_cliente.php" method="post">
                    <input type="text" name="cliente" placeholder="Nobre. NIT o CC">
                    <button class="btnA">buscar</button>
                </form>
                <button class="btnA"><a href="nuevoCliente.php">Crear cliente</a></button>
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
                        
                        if(!$cli || ($cli==0)){
        
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
                                echo '<td class="acciones"><a href="editar.php?id='.$fila['usu_id'].'"><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.3785 8.44975L11.4637 15.3647C11.1845 15.6439 10.8289 15.8342 10.4417 15.9117L7.49994 16.5L8.08829 13.5582C8.16572 13.1711 8.35603 12.8155 8.63522 12.5363L15.5501 5.62132M18.3785 8.44975L19.7927 7.03553C20.1832 6.64501 20.1832 6.01184 19.7927 5.62132L18.3785 4.20711C17.988 3.81658 17.3548 3.81658 16.9643 4.20711L15.5501 5.62132M18.3785 8.44975L15.5501 5.62132" stroke="#983fd3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 20H19" stroke="#983fd3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>';
                                echo '<a href="controladores/eliminar_cliente.php?id='.$fila['usu_id'].'"><svg width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#983fd3" stroke="#983fd3"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#983fd3" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"></path></g></svg></a></td>';
                                echo "</tr>";   
                            }
                        }
                        if($cli=="nom"){
                            $consulta="SELECT tbl_usuarios.*, tbl_ciudades.ciu_nom, tbl_estados.est_des  
                            FROM tbl_usuarios
                            INNER JOIN tbl_ciudades ON tbl_usuarios.usu_ciu_id=tbl_ciudades.ciu_id
                            AND tbl_usuarios.usu_nom='$id'
                            INNER JOIN tbl_estados ON tbl_usuarios.usu_est_id=tbl_estados.est_id";
                            
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
                                echo "<td><button><a href='editar.php?id=".$fila['usu_id']."'>E</a></button>";
                                echo "<button><a href='controladores/eliminar_cliente.php?id=".$fila['usu_id']."'>D</a></button></td>";
                                echo "</tr>";    
                            }
                        }
                        if($cli=="nit"){
                            $consulta="SELECT tbl_usuarios.*, tbl_ciudades.ciu_nom, tbl_estados.est_des  
                            FROM tbl_usuarios
                            INNER JOIN tbl_ciudades ON tbl_usuarios.usu_ciu_id=tbl_ciudades.ciu_id 
                            AND tbl_usuarios.usu_nit=$id
                            INNER JOIN tbl_estados ON tbl_usuarios.usu_est_id=tbl_estados.est_id";

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
                                echo "<td><button><a href='editar.php?id=".$fila['usu_id']."'>E</a></button>";
                                echo "<button><a href='controladores/eliminar_cliente.php?id=".$fila['usu_id']."'>D</a></button></td>";
                                echo "</tr>";   
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>