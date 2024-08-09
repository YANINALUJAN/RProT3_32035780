    <!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Estilos personalizados -->
<link rel="stylesheet" type="text/css" href="miestilo.css">

<style>
    /* Estilo para el párrafo */
    p {
        color: blue; /* Cambia el color del texto a azul */
    }

    /* Estilo para centrar el texto en el body */
    body {
        text-align: center;
    }

    /* Estilos específicos para el formulario de registro */
    .registro-form {
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

    /* Estilo específico para el botón de "Cancelar" en el formulario de registro */
    .registro-form .form-group button.cancelar {
        background-color: #dc3545; /* Color rojo */
        color: #fff; /* Texto blanco */
    }

    /* Cambiar el color del texto del botón de "Cancelar" al pasar el mouse sobre él */
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

<div class="image-container" style="text-align: center;">
    <img src="assets\img\Yanina.jpg" alt="Yanina" class="logo" style="width: 50%; max-width: 200px; height: auto;">
</div>

    <form class="registro-form" action="<?= base_url('enviar-form');?>" method="post">
        <?= csrf_field(); ?>
        <?php $validation = \Config\Services::validation(); ?>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
        <p>Crear Usuario</p> 
        <div class="form-group">
            <label for="nombreyapellido">Nombre y Apellido:</label>
            <input type="text" id="nombreyapellido" name="nombreyapellido" oninput="validarMayusculas(this)" required>
            <!-- Error -->
            <?php if (isset($validation) && $validation->getError("nombreyapellido")) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError("nombreyapellido"); ?>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="cuit">Cuit/Cuil:</label>
            <input type="text" id="cuit" name="cuit" required>
            <!-- Error -->
            <?php if (isset($validation) && $validation->getError("cuit")) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError("cuit"); ?>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <!-- Error -->
            <?php if (isset($validation) && $validation->getError("email")) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError("email"); ?>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <!-- Error -->
            <?php if (isset($validation) && $validation->getError("usuario")) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError("usuario"); ?>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <!-- Error -->
            <?php if (isset($validation) && $validation->getError("pass")) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError("pass"); ?>
            </div>
            <?php } ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-danger cancelar" onclick="window.location.href='panel';">Cancelar</button>
        </div>
    </form>

    <!-- Scripts de Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>