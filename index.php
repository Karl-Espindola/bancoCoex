<?php
require("controladores/conectar_db.php");

$sql_1="SELECT COUNT(usu_est_id) FROM tbl_usuarios WHERE usu_est_id=1";
$sql_2="SELECT COUNT(*) FROM tbl_usuarios";
$res_num_cre=mysqli_query($conexion, $sql_1);
$res_num_cli=mysqli_query($conexion, $sql_2);
$fila_cre=mysqli_fetch_row($res_num_cre);
$fila_cli=mysqli_fetch_row($res_num_cli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
                <h2>Inicio</h2>
            </div>
            <div class="info-banc">
                <div class="info">
                    <div class="n-cre">
                        <p>Créditos</p>
                        <?php
                        echo "<span>".$fila_cre[0]."</span>"
                        ?>
                    </div>
                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#80bdff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 10H22" stroke="#80bdff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.5483 20.4998H6.43829C2.88829 20.4998 1.98828 19.6198 1.98828 16.1098V7.88977C1.98828 4.70977 2.72831 3.68977 5.51831 3.52977C5.79831 3.51977 6.10829 3.50977 6.43829 3.50977H17.5483C21.0983 3.50977 21.9983 4.38977 21.9983 7.89977V12.3098" stroke="#80bdff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 16H10" stroke="#80bdff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M22 18C22 18.75 21.79 19.46 21.42 20.06C20.73 21.22 19.46 22 18 22C16.54 22 15.27 21.22 14.58 20.06C14.21 19.46 14 18.75 14 18C14 15.79 15.79 14 18 14C20.21 14 22 15.79 22 18Z" stroke="#80bdff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.4414 17.9995L17.4314 18.9895L19.5614 17.0195" stroke="#80bdff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="info">
                    <div class="n-cli">
                        <p>Numero de clientes</p>
                        <?php
                        echo "<span>".$fila_cli[0]."</span>"
                        ?>
                    </div>
                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"></rect> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8Z" fill="#80bdff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.43094 16.9025C7.05587 16.2213 9.2233 16 12 16C14.771 16 16.9351 16.2204 18.5586 16.8981C20.3012 17.6255 21.3708 18.8613 21.941 20.6587C22.1528 21.3267 21.6518 22 20.9592 22H3.03459C2.34482 22 1.84679 21.3297 2.0569 20.6654C2.62537 18.8681 3.69119 17.6318 5.43094 16.9025Z" fill="#80bdff"></path> </g></svg>
                </div>
            </div>
        </div>
    </div>
</body>
</html>