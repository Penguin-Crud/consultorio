<?php 

class consultationDB{
    private static $conexion = Null;

    public static function crearConexion(){
        if (! isset( self :: $conexion)){
            $opcionesPDO[PDO :: ATTR_ERRMODE] = PDO :: ERRMODE_EXCEPTION;
            self :: $conexion = new PDO('mysql:host=localhost;dbname=consultation_cto', 'root', '', $opcionesPDO);
            echo 'conexion realizada';
        }
        return self :: $conexion;
    }
}

?>