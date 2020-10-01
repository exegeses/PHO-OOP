<?php
    require 'config/config.php';
    $Region = new Region();
        $chequeo = $Region->modificarRegion();

        $css = 'danger';
        $mensaje = 'No se pudo modificar la región';
        if($chequeo){
            $css = 'success';
            $mensaje = 'Region: '.$Region->getRegNombre().' modificada correctamente.';
        }

    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">
            <h1>Alta de una nueva Región</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminRegiones.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

        </main>

<?php
    include 'includes/footer.php';
?>