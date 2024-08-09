<?php
/* require "app\Config\Database.php";
$message = "";

if (!empty($_POST["usuario"]) && !empty($_POST["pass" ])) {
    $sql = "INSERT INTO usuario (usuario, pass) VALUES ( :usuario, :pass)";
    $stm = $conn->prepare($sql);
    $stm->bindParam(" :usuario", $_POST["usuario"]);
    $password = password_hash($_POST["pass" ], PASSWORD_BCRYPT);
    $stm->bindParam(" :pass", $pass);

    if ($stmt->execute()){
        $message = "Succssfully Created new user";
    } else {
        $message = "Sorry there must have been an issue creating your account";
    }
} */
?>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" type="text/css" href="miestilo.css">
    <style>
        /* Estilos específicos para el formulario de registro */
        .registro-form p {
            color: blue; /* Cambia el color del texto a azul */
        }

        .registro-form {
            text-align: center;
        }

        .registro-form header {
            background-color: pink;
            color: white;
            padding: 20px 0;
        }

        .registro-form form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .registro-form .form-group {
            margin-bottom: 15px;
        }

        .registro-form .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .registro-form .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .registro-form .form-group button {
            background-color: #1fe60d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .registro-form .form-group button.cancelar {
            background-color: #dc3545; /* Color rojo */
            color: #fff; /* Texto blanco */
        }

        .registro-form .form-group button.cancelar:hover {
            background-color: #c82333; /* Color rojo más oscuro */
        }
    </style>
    <script>
        function validarMayusculas(input) {
            var valor = input.value;
            var valorMayusculas = valor.toUpperCase();
            if (valor !== valorMayusculas) {
                input.value = valorMayusculas;
            }
        }
    </script>
</head>
<body>
        <div class="registro-form">
        <div class="image-container" style="text-align: center;">
            <img src="assets/img/imagenPrueba.jpg" alt="Somos Formi Limpieza" class="logo">
        </div>

        <form action="<?= base_url('enviar-form');?>" method="post">
            <div class="form-group">
                <div style="text-align: center;">
                    <p>REGISTRO DE USUARIOS</p>
                    <?php $validation = \Config\Services::validation(); ?>
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <div class="form-group">
                        <label for="nombreyapellido">Nombre y Apellido:</label>
                        <input type="text" id="nombreyapellido" name="nombreyapellido" oninput="validarMayusculas(this)" required>
                        <!-- Error -->
                        <?php if ($validation->getError("nombreyapellido")) : ?>
                            <div class="alert alert-danger mt-2">
                                <?= $validation->getError("nombreyapellido"); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="cuit">Cuit/Cuil:</label>
                        <input type="text" id="cuit" name="cuit" required>
                        <!-- Error -->
                        <?php if ($validation->getError("cuit")) : ?>
                            <div class="alert alert-danger mt-2">
                                <?= $validation->getError("cuit"); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <!-- Error -->
                        <?php if ($validation->getError("email")) : ?>
                            <div class="alert alert-danger mt-2">
                                <?= $validation->getError("email"); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" required>
                        <!-- Error -->
                        <?php if ($validation->getError("usuario")) : ?>
                            <div class="alert alert-danger mt-2">
                                <?= $validation->getError("usuario"); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <label for="pass">Contraseña:</label>
                        <input type="password" id="pass" name="pass" required>
                        <!-- Error -->
                        <?php if ($validation->getError("pass")) : ?>
                            <div class="alert alert-danger mt-2">
                                <?= $validation->getError("pass"); ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-danger cancelar" onclick="window.location.href='Index.php';">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
