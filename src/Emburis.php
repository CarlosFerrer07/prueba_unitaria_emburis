
<?php

class Emburis
{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

function obtenerJSON()
{
    // Crear un objeto de la clase Emburis con datos ficticios
    $emburis = new Emburis("Sr Emburis", 30);

    // Crear un array asociativo con los datos de Emburis
    $datos_emburis = array(
        "nombre" => $emburis->nombre,
        "edad" => $emburis->edad
    );

    // Convertir el array asociativo a JSON
    $json_emburis = json_encode($datos_emburis);

    return $json_emburis;
}
