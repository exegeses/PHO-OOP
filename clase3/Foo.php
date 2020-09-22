<?php

    class Foo
    {
        private function __construct()
        {
            echo 'método constructor';
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
    }

/* mientras tanto, en otro archivo */

    //$objFoo = new Foo;
    //$objFoo->privado();

    Foo::estatico();