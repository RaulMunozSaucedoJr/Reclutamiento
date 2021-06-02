<!DOCTYPE html>
<html lang="es">

<!-- HEAD -->
<?php 
    include_once './Assets/TEMPLATES/HEAD/Head.php'
?>

<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <div class="row">

        <!-- NAVBAR VERSIÓN ESCRITORIO -->
        <?php
            include_once './Assets/TEMPLATES/NAVBAR__ESCRITORIO/Navbar__escritorio.php'
        ?>

        <!-- NAVBAR VERSIÓN MOVIL -->
        <?php
            include_once './Assets/TEMPLATES/NAVBAR__MOVIL/Navbar__movil.php'
        ?>

        <!-- SEARCHBAR -->
        <?php
            include_once './Assets/TEMPLATES/BARRA__BUSQUEDA/Barra__busqueda.php'
        ?>

        </div>
    </div>


    <!--FOOTER -->
    <?php
        include_once './Assets/TEMPLATES/FOOTER/Footer.php'
    ?>


    <!-- RECURSOS FOOTER: BOOTSTRAP, JS, CDN EXTERNOS, ETC -->
    <?php
        include_once './Assets/TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'
    ?>

</body>

</html>