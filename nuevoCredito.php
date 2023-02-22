<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar crédito</title>
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
                <h2>Nuevo Crédito</h2>
            </div>
            <br>
            <p><button><a href="clientes.php">Atras</a></button></p>
            <div class="contenedor-formulario">
                <form action="" method="post" class="form-edit form-reg">
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Pagaré Nro.</label>
                            <input type="number">
                        </div>
                        <div class="form-grupo">
                            <label for="">Monto crédito</label>
                            <input type="number">
                        </div>
                        <div class="form-grupo">
                            <label for="">Cuota inicial</label>
                            <input type="number">
                        </div>
                        <div class="form-grupo">
                            <label for="">Tasa de interes</label>
                            <select name="" id="">
                                <option value="" >10%</option>
                                <option value="" selected>20%</option>
                            </select>
                        </div>
                        <div class="form-grupo">
                            <label for="">Fecha de desembolso</label>
                            <input type="date">
                        </div>
                        <button>Guardar cambios</button>

                    </div>
                    <div class="form-col">
                        <div class="form-grupo">
                            <label for="">Cuotas mensuales</label>
                            <input type="text">
                        </div>
                        <div class="form-grupo">
                            <label for="">Cedula del cliente</label>
                            <input type="number">
                            <button>buscar</button>
                        </div>
                        <div class="form-grupo">
                            <label for="">Cliente</label>
                            <select name="" id="">
                                <option value="" >Cliente A</option>
                                <option value="" selected>Cliente B</option>
                            </select>
                        </div>
                        <div class="form-grupo">
                            <label for="">Fecha del créito</label>
                            <input type="date">
                        </div>
                        <div class="form-grupo">
                            <label for="">Observaciones</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button value="crear" class="btn-crear">Crear</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>