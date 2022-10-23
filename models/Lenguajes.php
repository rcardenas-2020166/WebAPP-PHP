<?php
    class Lenguajes extends Conectar
    {
        public function get_lenguajes()
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = 
                "SELECT * FROM `tm_lenguajes` WHERE len_estado = 1";
            $sql = $conectar -> prepare($sql);
            $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>