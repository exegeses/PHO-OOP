<?php

    class Auth
    {
        static function login()
        {
            $usuEmail = $_POST['usuEmail'];
            $usuClave = $_POST['usuClave'];
            $link = Conexion::conectar();
            $sql = "SELECT usuNombre FROM usuarios
                        WHERE usuEmail = :usuEmail 
                          AND usuClave = :usuClave";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':usuEmail', $usuEmail, PDO::PARAM_STR);
            $stmt->bindParam(':usuClave', $usuClave, PDO::PARAM_STR);
            $stmt->execute();
            if( $stmt->rowCount() == 0 ){
                header('location: formLogin.php?error=1');
            }else{
                //seteamos token de login
                $_SESSION['login'] = 1;
                //registramos nombre de usuario
                $dato = $stmt->fetch();
                $_SESSION['usuNombre'] = $dato['usuNombre'];
                header('location: admin.php');
            }

        }
        static function logout()
        {
            session_unset();
            session_destroy();
            header('location: formLogin.php');
        }
        static function autenticar()
        {
            //comprobamos token de login

        }

    }