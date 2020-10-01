<?php
    require 'config/config.php';
    $Region = new Region();
        $chequeo = $Region->agregarRegion();

        $css = 'danger';
        $mensaje = 'no se pudo agregar la región';
        if($chequeo){
            $css = 'success';
            $mensaje = 'Region: '.$Region->getRegNombre().' agregara correctamente.';
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