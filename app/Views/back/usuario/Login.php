<?php
require "app\Config\Database.php";
$message = "";

if (!empty($_POST["usuario"]) && !empty($_POST["pass"])) {
    $sql = "INSERT INTO usuario (usuario, pass) VALUES (:usuario, :pass)";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":usuario", $_POST["usuario"]);
    $password = password_hash($_POST["pass"], PASSWORD_BCRYPT);
    $stm->bindParam(":pass", $password);

    if ($stm->execute()){
        $message = "Se ha logueado correctamente";
    } else {
        $message = "Error en la contraseña o usuario";
    }
}
?>
    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el párrafo */
        p {
            color: black; /* Cambia el color del texto a negro */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: green;
            color: white;
            padding: 20px 0;
        }

        /* Estilo para los enlaces del nav */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            /* Agregar sombreado al texto */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilo adicional para alinear el formulario de búsqueda a la derecha */
        .navbar-collapse {
            display: flex;
            justify-content: flex-end;
        }

        .navbar-nav {
            margin-right: auto; /* Alinea los elementos de navegación a la izquierda */
        }

        .navbar-collapse form {
            margin-left: auto; /* Alinea el formulario a la derecha */
        }

        /* Estilo específico para el formulario de login */
        .login-form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .login-form .form-group {
            margin-bottom: 15px;
        }

        .login-form .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .login-form .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-form .form-group button {
            background-color: #1fe60d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        /* Estilo específico para el botón de "Cancelar" */
        .login-form .form-group button.cancelar {
            background-color: #dc3545; /* Color rojo */
            color: #fff; /* Texto blanco */
        }

        /* Cambiar el color del texto del botón de "Cancelar" al pasar el mouse sobre él */
        .login-form .form-group button.cancelar:hover {
            background-color: #c82333; /* Color rojo más oscuro */
        }
    </style>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" type="text/css" href="miestilo.css">
</head>
<body>
<div class="image-container" style="text-align: center;">
    <img src="assets/img/imagenPrueba.jpg" alt="Somos Formi Limpieza" class="logo">
</div>
<header>
    <nav>
        <ul>
            <!-- Enlaces a páginas externas -->
        </ul>
    </nav>
</header>
<nav class="text-center my-3"> 
    <ul class="d-inline-block">
        <li> <a href="https://www.google.com/?hl=es">Google</a> </li>
        <li> <a href="https://login.yahoo.com/">Yahoo</a> </li>
        <li> <a href="https://talentosdigitales.ar/">Talentos Digitales</a> </li>
    </ul>
</nav>
<?php if (session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

<!--INICIO DE FORMULARIO-->
<form class="login-form" action="<?= base_url('enviarlogin'); ?>" method="post">
    <div class="form-group">
        <div style="text-align: center;">
            <p>INICIAR SESIÓN</p>
        </div>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
    </div>
    <div class="form-group">
        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass" required>
    </div>
    <div class="form-group">
        <button type="submit">Iniciar Sesión</button>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger cancelar">Cancelar</button>
    </div>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</form>
</body>
