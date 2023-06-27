<?php
    class Conexion {

        public $servidor = 'localhost';
        public $usuario = 'nettualc_mazter707';
        public $password = 'M4zt3r.n3t';
        public $database = 'nettualc_laliga';
        public $port     = '3306';

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