<?php

// Require composer autoload
// require_once APP_PATH . '../../vendor/autoload.php';

use Mpdf\Mpdf;

class PdfHtml {

    /**
     * Ejemplo 2:
     * 
     * Trae el contenido del partial 'pdf/example2' y lo usa para
     * escribir el PDF.
     */
    public static function example2()
    {
        // Activa el almacenamiento en búfer de la salida
        ob_start();
        // Carga el contenido del partial
        View::partial('pdf/example2');
        // Obtiene en $html el contenido del búfer actual y elimina el búfer de salida actual
        $html = ob_get_clean();
        // Crea una instancia de la clase y le pasa el directorio temporal
        $mpdf = new Mpdf(['tempDir' => APP_PATH . '/temp']);
        // Escribe algo de contenido HTML:
        $mpdf->WriteHTML($html);
        // Envia un archivo PDF directamente al navegador
        $mpdf->Output();
    }

    /**
     * Ejemplo 3:
     * 
     * Trae el contenido del partial 'pdf/example2', se le pasan valores a tavés
     * de variables y lo usa para escribir el PDF.
     */
    public static function example3($name)
    {
        // Activa el almacenamiento en búfer de la salida
        ob_start();
        // Carga el contenido del partial
        View::partial('pdf/example3');
        // Obtiene en $html el contenido del búfer actual y elimina el búfer de salida actual
        $html = ob_get_clean();
        // Crea una instancia de la clase y le pasa el directorio temporal
        $mpdf = new Mpdf(['tempDir' => APP_PATH . '/temp']);
        // Escribe algo de contenido HTML:
        $mpdf->WriteHTML($html);
        // Obliga la descarga del PDF y se personaliza el nombre
        $mpdf->Output('example3.pdf', \Mpdf\Output\Destination::DOWNLOAD);
    }
}