!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
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

        /* Estilo de la tabla */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            border: 1px solid #dddddd;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .action-link {
            margin-right: 10px;
            padding: 5px 10px;
            border: 1px solid #009879;
            border-radius: 3px;
            color: #009879;
            text-decoration: none;
            transition: color 0.3s, background-color 0.3s;
        }

        .action-link:hover {
            color: #ffffff;
            background-color: #009879;
        }

        /* Estilos específicos para columnas */
        .col-email {
            width: 30%;
        }

        .col-acciones {
            width: 30%;
        }
    </style>
</head>
<body>

<h1>Editar Usuario</h1>
<?php if (!empty($usuario)): ?>
    <form action="<?php echo base_url('usuario/modificar_usuario'); ?>" method="post" class="registro-form">
        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
        <div class="form-group">
            <label for="nombreyapellido">Nombre y Apellido:</label>
            <input type="text" id="nombreyapellido" name="nombreyapellido" value="<?php echo $usuario['nombreyapellido']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cuit">CUIT:</label>
            <input type="text" id="cuit" name="cuit" value="<?php echo $usuario['cuit']; ?>" required>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo $usuario['usuario']; ?>" required>
        </div>
        <div class="form-group">
            <button type="submit">Actualizar</button>
            <button type="button" class="cancelar" onclick="window.history.back()">Cancelar</button>
        </div>
    </form>
    
<?php else: ?>
    <p>Usuario no encontrado.</p>
<?php endif; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>