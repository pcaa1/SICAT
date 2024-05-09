<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/52f7beb6c4.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/alerts.js"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="container-form">
        <div class="info">
            <div class="info-items">
                
                <h2>INICIO DE SESIÓN</h2>           
                <form method="post" action="" class="form">
                    <?php
                        //include("conexion.php");
                        //include("controlador.php");                    
                    ?>
                    <label>
                        <i class="fa-solid fa-envelope" style="color: #5A0A18;"></i>
                        <input type="text" name="User" placeholder="Usuario">
                    </label>
                    <label>
                        <i class="fa-solid fa-key" style="color: #5A0A18;"></i>
                        <input type="password" name="pass"  placeholder="Contraseña">
                    </label>
                    <input name="btnLogin" type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
        <div class="design">
            <div class="SICAT">
                <img src="img/correcaminos.png"/>
                <h2>SICAT</h2>
            </div>
        </div>
    </div>
</body>
</html>
