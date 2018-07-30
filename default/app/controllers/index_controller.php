<?php
// Require composer autoload
require_once APP_PATH . '../../vendor/autoload.php';

use Mpdf\Mpdf;

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {
        
    }

    public function example1()
    {
        //Importante: Sin vista y sin tamplate
        View::select(null, null);
        //Crea una instancia de la clase y le pasa el directorio default/app/temp/
        $mpdf = new Mpdf(['tempDir' => APP_PATH . '/temp']);
        //Escribe algo de contenido HTML:
        $mpdf->WriteHTML('¡Hola KumbiaPHP!');
        //Envia un archivo PDF directamente al navegador
        $mpdf->Output();
    }

    public function example2()
    {
        //Importante: Sin vista y sin tamplate
        View::select(null, null);
        //Llama al ejemplo 2
        HtmlToPdf::example2();
    }

    public function example3($name = 'KumbiaPHP')
    {
        //Importante: Sin vista y sin tamplate
        View::select(null, null);
        //Llama al ejemplo 3, recibe como parámetro el nombre por GET
        HtmlToPdf::example3($name);
    }
}
