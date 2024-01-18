<?php

class Publicacion
{

    public $titulo;
    public $contenido;
    public $fecha;
    public $imagen;



    function __construct()
    {
    }



    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }


    function getTitulo()
    {
        return $this->titulo;
    }


    function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    function getContenido()
    {
        return $this->contenido;
    }


    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function getFecha()
    {
        return $this->fecha;
    }



    function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }


    function getImagen()
    {
        return $this->imagen;
    }





    function __destruct()
    {
    }
}
