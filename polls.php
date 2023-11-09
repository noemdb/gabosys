<html lang="en" class="h-100" data-bs-theme="light">

<?php session_start(); ?>

<head>

<?php include('head.php'); ?>
    
</head>

<body class="d-flex h-100 text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="mb-auto" >
            <?php include('header.php'); ?> 
        </header>              

        <main class="px-3">
            <h1>Sistema de Registro y <br>Panel de Control.</h1>
            <p class="lead">Aplicación web desarrollada utilizando tecnologías como PHP, MySQL y el framework Bootstrap.
                Diseñado como un ejemplo básico, este sistema demuestra cómo implementar funcionalidades de registro de
                usuarios, inicio de sesión y un panel de control para administrar usuarios registrados.</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Leer mas</a>
            </p>
        </main>

        <footer class="mt-auto">
            <?php include('footer.php'); ?>
        </footer>

    </div>    

    <?php include('script.php'); ?>

</body>

</html>