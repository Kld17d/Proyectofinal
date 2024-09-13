<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <title>Crear Cuenta</title>
</head>

<body>
    <?php
    $msg = '';
    $classname = 'alert-danger';
    if (isset($_POST['registrar'])) {

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
		

        include('./Conexion.php');
		
        $consulta = "INSERT INTO `usuarios` (`Usuario`, `Clave`, `Nombre_Completo`) VALUES ('" . $correo . "','" . $contraseña . "','" . $nombre . "')";

        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            $classname = 'alert-primary';
            $msg = "Usuario registrado exitosamente";
        } else {
            $msg = "Error al registrar usuario";
        }

        mysqli_close($conexion);
    }
    ?>
    <form action="CrearCuenta.php" method="POST">
        <h1>Crea Tu Cuenta </h1>
        <hr>
        <?php
        if (!empty($msg)) {
        ?>
            <div class="alert <?php echo $classname; ?>">
                <?php echo $msg; ?>
            </div>
        <?php
        }
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre Completo">

        <i class="fa-solid fa-envelope"></i>
        <label>Correo</label>
        <input type="text" name="correo" placeholder="Correo electrónico">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="contraseña" placeholder="Contraseña">

        <button type="submit" name="registrar">Registrar</button>
        <a href="Index.php">Iniciar sesión</a>
    </form>
</body>

</html>
