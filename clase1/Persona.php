<?php

    class Persona
    {
        ## atributos
        private $nombre;
        private $apellido;

        ## métodos
        public function verDatos()
        {
            $mensaje = 'Nombre: '.$this->nombre;
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->apellido;
            $mensaje .= '<br>';
            return $mensaje;
        }

    }
