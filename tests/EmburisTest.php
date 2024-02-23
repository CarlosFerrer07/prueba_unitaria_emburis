<?php
use PHPUnit\Framework\TestCase;
include './src/Emburis.php';

final class EmburisTest extends TestCase
{
    public function testEsJSON(): void
    {
        // Obtener el JSON utilizando la función obtenerJSON()
        $json = obtenerJSON();

        // Decodificar el JSON y comprobar si es un JSON válido
        $datos_decodificados = json_decode($json);

        // Comprobar si el JSON se decodificó correctamente y es un objeto
        $this->assertNotNull($datos_decodificados);
        $this->assertIsObject($datos_decodificados);
    }

}
?>