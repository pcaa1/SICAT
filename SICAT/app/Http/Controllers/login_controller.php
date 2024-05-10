
<?php
    session_start();
    if(!empty($_POST["btnLogin"])){

        if (empty($_POST["User"]) or empty($_POST["pass"])){
            echo "<script>swal({title: 'Hay campos vacíos', text: 'Favor de llenar todos los campos', button: 'Ok'});</script>";
        }
        else {
            $user=$_POST["User"];
            $pass=$_POST["pass"];
            $sql=$conexion-> query("select * from tb_usuarios where nombre='$user' and contrasena='$pass'");
            if($datos=$sql->fetch_object()){
                $_SESSION["id"]=
                header("welcome.blade.php");
            }
            else{
                echo "<script>swal({title: 'Acceso denegado', text: 'El usuario o la contraseña son incorrectos', button: 'Ok'});</script>";
            }
        }
    }


?>
