<?php

include "../models/Conexion.php";
error_reporting(0);
session_start();

if(isset($_SESSION["username"])){
    header("Location: ../php/login.php");
}

if(isset($_))


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/styles2.css">


    <title>Login 2</title>
</head>

<body>

    <h1>Turismo rural la junta</h1>

    <div class="container">


        <div class="container_form">
            <img src="../images/user.png" alt="">

            <h2>Iniciar Sesion</h2>

            <form action="validar.php" method="post">

                <input type="text" name="username" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <input class="check" type="checkbox" name="" id="checkid">
                <label for="checkit">Recuerdame</label>

                <a href="#">Olvidaste tu contraeña</a>

                <button class="btn-registro" type="submit" value="" name="">Iniciar Sesion </button>

                <a class="registro" href="#">Registrate aqui</a>


            </form>





        </div>

    </div>



</body>

</html>