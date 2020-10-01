<?php

    #### configuración general de sistema  ####
    session_start();

    /*
     * función de autocarga
     * */
    function autoLoader($nClase)
    {
        require_once 'clases/'.$nClase.'.php';
    }

    spl_autoload_register('autoLoader');

    /*
     * css sección activa
     * */

    function activo($seccion)
    {
        $archivo_actual = basename($_SERVER['PHP_SELF'], '.php');

        return ($seccion==$archivo_actual)?'active':'';
    }