<?php

    //declaración de variable
    $x = 10;
    $y = 20;

    function foo()
    {
        //código interno de mi función
        return $x; //da error por ámbito o scope
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    echo $x;
    // eliminar una variable:
    unset($x);
?>
</body>
</html>
