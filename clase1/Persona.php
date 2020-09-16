<?php

    class Persona
    {
        ## atributos
        private $nombre;
        private $apellido;

        ## métodos

        /**
         * Método para informar datos de la Persona
         * @return string $mensaje
         */
        public function verDatos()
        {
            $mensaje = 'Nombre: '.$this->nombre;
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->apellido;
            $mensaje .= '<br>';
            return $mensaje;
        }

    }
