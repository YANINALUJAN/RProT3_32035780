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
    <h1>Listado de Usuarios</h1>
    <a class="btn btn-primary mb-3" href="<?php echo base_url('crearusuario'); ?>">Agregar Usuario</a>
    <a class="btn btn-secondary mb-3" href="javascript:history.back()">Volver</a> <!-- Botón de Volver -->
    <div class="table-responsive">
        <table class="table table-bordered styled-table">
            <thead>
                <tr>
                    <th>Nombre y Apellido</th>
                    <th>Cuit/Cuil</th>
                    <th class="col-email">Usuario</th>
                    <th class="col-acciones">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['nombreyapellido']; ?></td>
                    <td><?php echo $usuario['cuit']; ?></td>
                    <td><?php echo $usuario['usuario']; ?></td>
                    <td>
                        <a class="action-link" href="<?php echo base_url('usuario/ver_usuario/'.$usuario['id_usuario']); ?>">Ver</a>
                        <a class="action-link" href="<?php echo base_url('usuario/editar/'.$usuario['id_usuario']); ?>">Editar</a>
                        <a class="action-link" href="<?php echo base_url('usuario/borrar_usuario/'.$usuario['id_usuario']); ?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
