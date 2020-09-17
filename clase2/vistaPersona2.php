<?php
    require 'Persona2.php';
    //intanciamos objeto de tipo Persona2
    $Persona2 = new Persona2('Darío', 'Ciada');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Método Constructor</title>
</head>
<body>
    <h1>Método constructor</h1>

    <div class="objeto">
<?php
    //llamamos al método verDatos()
    echo $Persona2->verDatos();
?>
    </div>

</body>
</html>
