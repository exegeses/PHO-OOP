<?php

    class Foo
    {
        public function __construct()
        {
            echo 'método constructor <br>';
        }

        public function publico()
        {
            echo 'metodo público <br>';
        }
        private function privado()
        {
            echo 'metodo privado <br>';
        }
        static function estatico()
        {
            echo 'metodo estático <br>';
        }

        public function __destruct()
        {
            echo 'explota todo';
        }
    }

/* mientras tanto, en otro archivo */

    $objFoo = new Foo;
    //$objFoo->privado();
    $objFoo->publico();
    //Foo::estatico();

echo 'unset() ';
    //unset($objFoo);
    $objFoo = null;
?>
<br>
a ver:
