<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>
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
                <h2>Nuevo Cliente</h2>
            </div>
            <br>
            <p><button class="btnA"><a href="clientes.php">Atras</a></button></p>
            <div class="contenedor-formulario">
                <form action="controladores/registrar_cliente.php" method="post" class="form-edit">
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Nombres</label>
                            <input type="text" name="nom">
                        </div>
                        <div class="form-grupo">
                            <label for="">NIT/CC</label>
                            <input type="text" name="nit">
                        </div>
                        <div class="form-grupo">
                            <label for="">Ciudad</label>
                            <select name="ciudad" id="">
                                <option value="1" >Bucararamanga</option>
                                <option value="2" selected>Barranquilla</option>
                                <option value="3" >Cali</option>
                                <option value="4" >Medellin</option>
                                <option value="5" >Bogota</option>
                            </select>
                        </div>
                        <div class="form-grupo">
                            <label for="">Estado de crédito</label>
                            <select name="estado" id="">
                                <option value="1" >Activo</option>
                                <option value="2" selected>Inactivo</option>
                            </select>
                        </div>
                        <button class="btnA">Guardar cambios</button>

                    </div>
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Apellidos</label>
                            <input type="text" name="apellido">
                        </div>
                        <div class="form-grupo">
                            <label for="">Direccion</label>
                            <input type="text" name="direccion">
                        </div>
                        <div class="form-grupo">
                            <label for="">Telefono</label>
                            <input type="number" name="telefono">
                        </div>
                    </div>
                    <div class="form-col">
                    <div class="form-grupo">
                            <label for="">Cupo total</label>
                            <input type="number" name="">
                        </div>
                        <div class="form-grupo">
                            <label for="">Cupo disponible</label>
                            <input type="number" name="cupDisp">
                        </div>
                        <div class="form-grupo">
                            <label for="">Dias de gracia</label>
                            <input type="number">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>