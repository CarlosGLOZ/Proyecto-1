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
    public static function getMesas($conexion, $filtros=[], $campo='*')
    {
        // Recoger todas las mesas
        $sql = "SELECT $campo FROM ".BD['MESA']['TABLA']." WHERE 1=1";

        // aplicar filtros
        foreach ($filtros as $key => $value) {
            $sql = $sql." AND ".FILTROS['BD'][$key]." = '$value'";
        }

        $sql = $sql.";";

        // echo $sql;
        // die();

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

        $sql = $sql." ORDER BY ".BD['REGISTRO']['ID']." DESC;";

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

    public static function cambiarEstadoMesa($conexion, $id_mesa, $estado_mesa)
    {
        //  Cambiar el estado de la mesa en la tabla mesa
        $sql = "UPDATE ".BD['MESA']['TABLA']." SET ".BD['MESA']['ESTADO']." = '$estado_mesa' WHERE ".BD['MESA']['ID']." = $id_mesa";
        return mysqli_query($conexion, $sql);
    }

    public static function crearRegistroMesa($conexion, $id_mesa, $comensales)
    {
        session_start();
        $sql = "
            INSERT INTO ".BD['REGISTRO']['TABLA']." 
            (".BD['REGISTRO']['ID'].", ".BD['REGISTRO']['FECHAENTRADA'].", ".BD['REGISTRO']['FECHASALIDA'].", ".BD['REGISTRO']['MESA'].", ".BD['REGISTRO']['CAMARERO'].", ".BD['REGISTRO']['COMENSALES'].")
            VALUES(NULL, '".date('Y-m-d H:i:s')."', NULL, $id_mesa, ".$_SESSION['USER'][BD['EMPLEADO']['ID']].", $comensales)
        ;";
        
        return mysqli_query($conexion, $sql);
    }

    public static function cerrarRegistroMesa($conexion, $id_mesa)
    {
        $id_registro = Mesa::getRegistrosAbiertos($conexion, $id_mesa)[0][BD['REGISTRO']['ID']];

        $sql = "
            UPDATE ".BD['REGISTRO']['TABLA']."
            SET ".BD['REGISTRO']['FECHASALIDA']." = '".date('Y-m-d H:i:s')."'
            WHERE ".BD['REGISTRO']['ID']." = $id_registro
        ;";

        return mysqli_query($conexion, $sql);
    }

    public static function crearIncidenciaMesa($conexion, $id_mesa, $descripcion)
    {
        $sql = "
            INSERT INTO ".BD['INCIDENCIA']['TABLA']."(".BD['INCIDENCIA']['ID'].", ".BD['INCIDENCIA']['NOMBRE'].", ".BD['INCIDENCIA']['ESTADO'].", ".BD['INCIDENCIA']['MESA'].")
            VALUES (NULL, '".mysqli_real_escape_string($conexion, trim(strip_tags($descripcion)))."', 1, $id_mesa)
        ;";
        
        return mysqli_query($conexion, $sql);
    }

    public static function cerrarIncidenciaMesa($conexion, $id_mesa)
    {
        $id_incidencia = Mesa::getIncidenciaActivaDeMesa($conexion, $id_mesa)[BD['INCIDENCIA']['ID']];

        $sql = "UPDATE ".BD['INCIDENCIA']['TABLA']." SET ".BD['INCIDENCIA']['ESTADO']." = 0 WHERE ".BD['INCIDENCIA']['ID']." = $id_incidencia;";

        return mysqli_query($conexion, $sql);
    }

    public static function getMaxComensales($conexion, $id_mesa)
    {
        $sql = "SELECT ".BD['MESA']['CAPACIDAD']." AS capacidad FROM ".BD['MESA']['TABLA']." WHERE ".BD['MESA']['ID']." = $id_mesa;";

        return mysqli_fetch_assoc(mysqli_query($conexion, $sql))['capacidad'];
    }

    public static function getRegistrosAbiertos($conexion, $id_mesa)
    {
        $sql = "SELECT * FROM ".BD['REGISTRO']['TABLA']." WHERE ".BD['REGISTRO']['MESA']." = $id_mesa AND ".BD['REGISTRO']['FECHASALIDA']." IS NULL ORDER BY ".BD['REGISTRO']['ID']." DESC;";

        $array = [];
        foreach (mysqli_query($conexion, $sql) as $key => $value) {
            array_push($array, $value);
        }
        
        return $array;
    }

    public static function getEstadoMesa($conexion, $id_mesa) 
    {
        $sql = "SELECT ".BD['MESA']['ESTADO']." AS estado FROM ".BD['MESA']['TABLA']." WHERE ".BD['MESA']['ID']." = $id_mesa;";

        return mysqli_fetch_assoc(mysqli_query($conexion, $sql))['estado'];
    }

    public static function getIncidenciaActivaDeMesa($conexion, $id_mesa)
    {
        $sql = "SELECT * FROM ".BD['INCIDENCIA']['TABLA']." WHERE ".BD['INCIDENCIA']['MESA']." = $id_mesa AND ".BD['INCIDENCIA']['ESTADO']." = 1;";
        // echo $sql;
        // die();
        return mysqli_fetch_assoc(mysqli_query($conexion, $sql));
    }

    public static function validarComensales($conexion, $id_mesa, $comensales)
    {
        if ($comensales < 1 || $comensales > Mesa::getMaxComensales($conexion, $id_mesa)) {
            return false;
        }
        return true;
    }

    public static function getSalas($conexion)
    {
        $sql = "SELECT * FROM ".BD['SALA']['TABLA'].";";

        return mysqli_query($conexion, $sql);
    }

    public static function getCapacidades($conexion)
    {
        $sql = "SELECT ".BD['MESA']['CAPACIDAD']." AS cap FROM ".BD['MESA']['TABLA']." GROUP BY ".BD['MESA']['CAPACIDAD'].";";

        $result = mysqli_query($conexion, $sql);
        $return = [];

        foreach ($result as $value) {
            array_push($return, $value['cap']);
        }

        return $return;
    }

}
