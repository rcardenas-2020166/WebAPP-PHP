<?php
    class Proyectos extends Conectar
    {
        public function get_proyectos()
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = 
                "SELECT * FROM `tm_proyectos` WHERE pro_destacado = 0 and pro_estado = 1";
            $sql = $conectar -> prepare($sql);
            $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_proyecto_x_etiqueta($pro_id)
        {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = 
                "SELECT * FROM `tm_proyecto_detalle` WHERE pro_id = ? AND det_estado = 1";
            $sql = $conectar -> prepare($sql);
            $sql -> bindValue(1, $pro_id);
            $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>