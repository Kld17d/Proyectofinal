<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="/style.css">

	
	<title>Bievenido</title>
</head>

<body>
    <?php
    $error = '';

    if (isset($_POST['iniciar'])) {
        $correo = $_POST['Correo'];
        $clave =  $_POST['Clave'];


		
        if ($correo !== "" && $clave !== "") {

            include('./Conexion.php');

            $consulta = "SELECT * FROM `clientes` WHERE `Correo` = '" . $correo . "'";

            $resultado = $conexion->query($consulta);

			


            $usuarioEncontrado = false;
            $claveEncontrada = false;
            $nombreUsuario = "";
            if ($resultado) {
                while ($columna = $resultado->fetch_assoc()) {
                    if ($columna['Usuario'] == $usuario) {
                        $usuarioEncontrado = true;
						
										
                        if ($columna['Clave']==$clave) {
                            $claveEncontrada = true;
                            $nombreUsuario = $columna['Nombre_Completo'];
                        }
                    }
                }
                if ($usuarioEncontrado && $claveEncontrada) {
                    $error = "";
                    session_start();
                    $_SESSION['nombreUsuario'] = $nombreUsuario;
                    
                  
                    header("Location:./Inicio.php");
                } else {
                    if (!$usuarioEncontrado) {
                        $error = "Usuario no encontrado.";
                    } else {
                        $error = "La clave es incorrecta";
                    }
                }
            }
        }
        mysqli_close($conexion);
    }
    ?>
    <form action="Index.php" method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
        <?php
        if (!empty($error)) {
        ?>
            <div class="alert alert-danger">
                <?php
                echo $error
                ?>
            </div>
        <?php
        }
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>correo</label>
        <input type="text" name="Correo" placeholder="correo electronico">
        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>
        <button type="submit" name="iniciar">Iniciar Sesion</button>
        <a href="CrearCuenta.php">Crear Cuenta</a>
    </form>
</body>

</html>
