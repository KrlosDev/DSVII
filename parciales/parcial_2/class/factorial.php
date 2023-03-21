<?php
require_once('modelo.php');

class factorial extends modeloCredencialesBD
{
    //protected $titulo;
    //protected $fecha;
    //protected $hora_inicio;
    //protected $hora_final;
    //protected $ubicacion;
    //protected $actividades;
    //protected $descripcion;
    //protected $estado;

    public function __construct()
    {
        parent::__construct();
    }


    public function obtenerFactorial($n)
    { {
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial = $factorial * $i;
            }
            return $factorial;
        }
    }

    function sumatoria($n)
    {

        $sumatoria = 12345;


        return $sumatoria;
        // $factorial = $this->obtenerFactorial($n);
        // $sum = 0;
        //for ($i = 1; $i <= $n; $i++) {



        //  $primero = $factorial / $dino = $this->obtenerFactorial(1);
        //$sum = $sum + ($num = $this->obtenerFactorial($n - $i) / $deno = $this->obtenerFactorial($i + 1));
        //$tercero = $num2 = $this->obtenerFactorial(1) / $factorial;
        //}



        //return $sum;
    }



    public function insert($n, $factorial, $sumatoria)
    {
        $instruccion = "CALL insertar( $n, $factorial, $sumatoria);";

        $consulta = $this->_db->query($instruccion);


        // $resultado = $consulta->fetch_all();

        // if (!$resultado) {
        //     echo "Fallo al insertar las sumatorias";
        // } else {
        //     return $resultado;
        //     $this->_db->close();
        // }
    }
}
   /*  public function listar()
    {

        $instruccion = "CALL listar()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las actividades";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function select_actividades()
    {

        $instruccion = "CALL select_actividades()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las actividades";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }


    public function update(

        $titulo,
        $fecha,
        $hDesde,
        $hHasta,
        $estado,
        $descripcion,
        $actividades,
        $ubicacion,
        $ID
    ) {
        $instruccion = "call UpdateAgenda('" . $titulo . "','" . $fecha .
            "','" . $hDesde . "','" . $hHasta . "','" . $estado . "','" .
            $descripcion . "','" . $actividades . "','" . $ubicacion . "','" . $ID . "')";
        $consulta = $this->_db->query($instruccion);
        // $resultado = $consulta->fetch_assoc();
        // if (!$resultado) {
        //     echo "Fallo al actualizar las actividades";
        // } else {
        //     return $resultado;

        //     $this->_db->close();
        // }
    }
}
 */