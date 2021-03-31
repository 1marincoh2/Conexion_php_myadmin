<?php

namespace Controllers;
//require_once("../Models/Persona.php");
require_once ("../autoload.php");

use Models\Persona;

class Cliente extends Persona
{

    protected $fltCredito;

    function __construct(int $Dpi, string $nombre, int $edad)
    {
        parent::__construct($Dpi, $nombre, $edad);
    }

    public function setCredito(string $credito)
    {
        $this->fltCredito = $credito;
    }

    public function getCredito(): float
    {

        return $this->fltCredito;
    }

    public function getDatosPersonales()
    {
        $datos = "
       <h2>DATOS PERSONALES<h2>
       DPI:{$this->intDpi}<br>
       Nombre:{$this->strNombre}<br>
       Edad:{$this->intEdad}<br>  
    ";
        return $datos;
    }

    public function setMensaje(string $mensaje){

        $this-> mensaje = $mensaje;

    }

    public function getMensaje():string{

        return $this-> mensaje .''. $this->strNombre;

    }

}//end class Cliente

?>