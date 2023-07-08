<?php
    include "Conexion.php";

    class Auth extends Conexion{
        public function registrar($usuario, $password, $nombre_completo, $email, $celular, $genero, $nacimiento, $equipo){
            $conexion = parent::conectar();

            $validar = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' or
            nombre_completo = '$nombre_completo' or email = '$email' or celular = '$celular'";
            $validando = $conexion->query($validar);
            if($validando->num_rows > 0){
                echo "El usuario, nombre completo, email y/o celular ya se encuentran registrados";
                header("location:../../registro.php");
            } else {
            $sql = "INSERT INTO t_usuarios (usuario, password, nombre_completo, email, celular, genero, nacimiento, equipo) 
            VALUES (?,?,?,?,?,?,?,?)";

            $query = $conexion->prepare($sql);
            $query->bind_param('ssssssss', $usuario, $password, $nombre_completo, $email, $celular, $genero, $nacimiento, $equipo);
            return $query->execute();
            }
        }

        public function logear($usuario, $password){
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM t_usuarios
            WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);
            $passwordExistente = mysqli_fetch_array($respuesta)['password'];
            
            if (password_verify($password, $passwordExistente)){
                $_SESSION['usuario'] = $usuario;
                return true;
            }else{
                return false;
            }
        }
    }
?>