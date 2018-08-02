Crear PDF con HTML y mPDF
======

Código del ejemplo para crear documentos PDF usando HTML con KumbiaPHP 1.0RC, del manual: [Crear documentos PDF usando HTML](https://www.kumbiaphp.com/blog/2018/08/06/crear-pdf-usando-html/)

## Correr en Docker

Como prerequisito debe tener instalado Docker en el sistema operatvo: [Obtener Docker](https://www.docker.com/products/overview)

### 1. Correr Apache + PHP 7

En la carpeta raíz de este proyecto correr:

``
docker-compose up -d --build
``

o simplemente...

``
docker-compose up -d
``

Mirar la web en **http://localhost:8184**

La opción ``--build``, es sólo para la primera vez o cuando se cambian los ficheros del docker.

``docker-compose up`` (muestra el log en la terminal)

``docker-compose up -d `` (como demonio, sin datos en la terminal)

## Instalar mPDF con composer

El contenedor actual ya viene con composer instalado y el archivo _composer.json_ 
modificado para indicar la instalación mPDF en su versión 7

Archivo: _composer.json_

``
{    
    "require": {
        "php": ">=5.6",
        "mpdf/mpdf": "7.1.1"
    }
}
``

### 1. Igresar a la consola o bash del contenedor

``docker exec -t -i kumbiaphpmpdf_webapp_1 bash``

### 2. Ejecutar el comando

``composer install``
