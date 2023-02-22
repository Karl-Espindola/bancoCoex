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
            <img src="img/logo_usuario.png" alt="" class="logo">
            <ul class="lista">
                <li class="">
                    <a href="" class="li-link">

                        <span>Inicio</span>
                    </a>
                </li>
                <li class="">
                    <a href="clientes.php" class="li-link">

                        <span>Clientes</span>
                    </a>
                </li>
                <li class="">
                    <a href="" class="li-link">

                        <span>créditos</span>
                    </a>
                </li>
            </ul>
            <button>Cerrar sesión</button>
        </div>
        <div class="informacion">
            <div class="titulo">
                <h2>Nuevo Cliente</h2>
            </div>
            <br>
            <p><button><a href="clientes.php">Atras</a></button></p>
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
                        <button>Guardar cambios</button>

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