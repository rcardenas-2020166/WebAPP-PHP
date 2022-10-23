<?php
    class Proyectosdestacados extends Conectar
    {
        public function get_proyectos_destacados()
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = 
                "SELECT * FROM `tm_proyectos` WHERE pro_destacado = 1 and pro_estado = 1";
            $sql = $conectar -> prepare($sql);
            $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>