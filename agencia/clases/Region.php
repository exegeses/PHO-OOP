<?php

    class Region
    {

        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll();
            return $regiones;
        }


        /**
         * Método para ver una región por si ID
         * @return bool
         */
        public function verRegionPorID()
        {
            $regID = $_GET['regID'];
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones
                        WHERE regID = ".$regID;
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $datosRegion = $stmt->fetch();
            // seteamos los atributos
            $this->setRegID( $datosRegion['regID'] );
            $this->setRegNombre( $datosRegion['regNombre'] );

            return true;
        }


        /**
         * Método para agregar una Región
         * @return bool
         */
        public function agregarRegion()
        {
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO regiones
                            ( regNombre )
                        VALUE
                            ( :regNombre )";
            $stmt = $link->prepare($sql);
            //dataBinding (relación de datos)
            $stmt->bindParam(':regNombre', $regNombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                //registramos en el objeto de tipo Región sus atributos
                $this->setRegID($link->lastInsertId());
                $this->setRegNombre($regNombre);
                return true;
            }
            return false;
        }

        public function modificarRegion()
        {
            $regID = $_POST['regID'];
            $regNombre = $_POST['regNombre'];
            $link = Conexion::conectar();
            $sql = "UPDATE regiones
                        SET regNombre = ?
                        WHERE regID = ?";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(1, $regNombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $regID, PDO::PARAM_INT);

            if ( $stmt->execute() ){
                $this->setRegID($regID);
                $this->setRegNombre($regNombre);
                return true;
            }
            return false;
        }

        ###########################
        #### getters & setters ####
        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }
        /**
         * @param mixed $regID
         */
        public function setRegID($regID): void
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }
        /**
         * @param mixed $regNombre
         */
        public function setRegNombre($regNombre): void
        {
            $this->regNombre = $regNombre;
        }

    }