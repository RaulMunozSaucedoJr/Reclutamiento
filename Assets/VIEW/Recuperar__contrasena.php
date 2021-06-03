<!DOCTYPE html>
<html lang="en">
<!-- HEAD-->
<?php
    include_once '../TEMPLATES/HEAD/Head.php'
?>

<body>

    <!-- NAVBAR VERSIÓN ESCRITORIO -->
    <?php
        include_once '../TEMPLATES/NAVBAR__ESCRITORIO/Navbar__escritorio.php'
    ?>

    <!-- NAVBAR VERSIÓN MOVIL -->
    <?php
        include_once '../TEMPLATES/NAVBAR__MOVIL/Navbar__movil.php'
    ?>

    <div class="container">
        <div class="row">
            <!-- FORMULARIO RECUPERAR CONTRASEÑA -->
            <?php
            include_once '../TEMPLATES/FORMULARIO__RECUPERAR__CONTRASENA/Formulario__recuperar__contrasena.php'
        ?>
        </div>
    </div>

    <!-- RECURSOS FOOTER: BOOTSTRAP, JS, CDN EXTERNOS, ETC -->
    <?php
        include_once '../TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'
    ?>

</body>

</html>