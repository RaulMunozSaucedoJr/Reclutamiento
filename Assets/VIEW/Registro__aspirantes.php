<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php
    include_once '../TEMPLATES/HEAD/Head.php'
?>

<body>

    <!--NAVBAR VERSIÓN ESCRITORIO -->
    <?php
        include_once '../TEMPLATES/NAVBAR__ESCRITORIO/Navbar__escritorio.php'
    ?>

    <!-- NAVBAR VERSIÓN MOVIL -->
    <?php
        include_once '../TEMPLATES/NAVBAR__MOVIL/Navbar__movil.php'
    ?>


    <div class="container-fluid">
        <div class="row">
            <?php
                include_once '../TEMPLATES/FORMULARIO__REGISTRO__ASPIRANTES/Formulario__registro__aspirantes.php'
            ?>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
        include_once '../TEMPLATES/FOOTER/Footer.php'
    ?>

    <!-- RECURSOS FOOTER: BOOTSTRAP, JS, CDN EXTERNOS, ETC -->
    <?php
        include_once '../TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'
    ?>

</body>

</html>