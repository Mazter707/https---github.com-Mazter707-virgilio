<?php
    class Conexion {

        public $servidor = 'localhost';
        public $usuario = 'root';
        public $password = 'Tec.M1l3n1o.244957';
        public $database = 'loginpoo2023';
        public $port     = '33065';

        public function conectar (){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->database,
                $this->port
            );
        }
    }
?>