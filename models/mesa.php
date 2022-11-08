<?php

class Mesa
{
    // Atributos
        private $id;
        private $estado;
        private $sala;
        private $capacidad;

    // Constructor
        public function __construct($id, $estado, $sala, $capacidad)
        {
            $this -> id = $id;
            $this -> estado = $estado;
            $this -> sala = $sala;
            $this -> capacidad = $capacidad;
        }

    // Getters y Setters
        public function getId()
        {
            return $this -> id;
        }
        public function getEstado()
        {
            return $this -> estado;
        }
        public function getSala()
        {
            return $this -> sala;
        }
        public function getCapacidad()
        {
            return $this -> capacidad;
        }

        public function setId($val)
        {
            $this -> id = $val;
            return $this -> id == $val;
        }
        public function setEstado($val)
        {
            $this -> estado = $val;
            return $this -> estado == $val;
        }
        public function setSala($val)
        {
            $this -> sala = $val;
            return $this -> sala == $val;
        }
        public function setCapacidad($val)
        {
            $this -> capacidad = $val;
            return $this -> capacidad == $val;
        }

    // Metodos
    public static function getMesas($conexion, $filtros)
    {
        // Recoger todas las mesas
        $sql = "SELECT * FROM ".BD['MESA']['TABLA']." WHERE 1=1";

        // aplicar filtros
        foreach ($filtros as $key => $value) {
            $sql = $sql." AND ".FILTROS['BD'][$key]." = $value";
        }

        $sql = $sql.";";

        return mysqli_query($conexion, $sql);
    }

    public static function getRegistros($conexion, $filtros)
    {
        // Recoger todas las mesas
        $sql = "SELECT * FROM ".BD['REGISTRO']['TABLA']." WHERE 1=1";

        // aplicar filtros
        foreach ($filtros as $key => $value) {
            $sql = $sql." AND ".FILTROS['BD'][$key]." = $value";
        }

        $sql = $sql.";";

        return mysqli_query($conexion, $sql);
    }

    public static function mesaExiste($conexion, $mesa)
    {
        $sql = "SELECT COUNT(1) AS num_mesas FROM ".BD['MESA']['TABLA']." WHERE ".BD['MESA']['ID']." = $mesa;";

        if (mysqli_fetch_assoc(mysqli_query($conexion, $sql))['num_mesas'] < 1) {
            return false;
        }
        return true;
    }
}
