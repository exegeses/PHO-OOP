<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino();
        $chequeo = $Destino->agregarDestino();

        $css = 'danger';
        $mensaje = 'no se pudo agregar el destino';
        if($chequeo){
            $css = 'success';
            $mensaje = 'Destino: '.$Destino->getDestNombre().' agregado correctamente.';
        }

    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">
            <h1>Alta de un nuevo Destino</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminDestinos.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

        </main>

<?php
    include 'includes/footer.php';
?>