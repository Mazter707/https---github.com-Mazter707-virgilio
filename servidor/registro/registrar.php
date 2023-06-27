<?php
    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $genero = $_POST['genero'];
    $nacimiento = $_POST['nacimiento'];
    $equipo = $_POST['equipo'];

   

    $Auth = new Auth();

    if ($Auth->registrar($usuario, $password, $nombre_completo, $email, $celular, $genero, $nacimiento, $equipo)){
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>