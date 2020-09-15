<?php
    require 'funciones.php'; // <- HELPERS
    require 'Persona.php';
    // instanciar un objeto a partir de clase Persona
    $oPersona = new Persona;
    //$oPersona->nombre = 678489; no debemos tener atributos públicos
    //$oPersona->apellido = 97684; no debemos tener atributos públicos
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Vista Persona</h1>
    <?php
        mostrar($oPersona);
    ?>
    
    <div class="objeto">
<?php
    //llamamos al método verDatos()
    echo $oPersona->verDatos();
?>
    </div>
</body>
</html>
