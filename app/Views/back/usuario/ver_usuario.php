<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" type="text/css" href="miestilo.css">
    <style>
        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para centrar el h1 */
        h1 {
            text-align: center;
            margin-top: 20px;
        }

        /* Estilo para el cuadro de datos del usuario */
        .user-data {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: left;
            margin-bottom: 20px;
        }

        .user-data p {
            margin: 10px 0;
        }

        .user-data strong {
            font-weight: bold;
        }

        /* Estilo para el botón de volver */
        .volver-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .volver-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Datos del Usuario</h1>
    <?php if (!empty($usuario)): ?>
        <div class="user-data">
            <p><strong>Nombre y Apellido:</strong> <?php echo $usuario['nombreyapellido']; ?></p>
            <p><strong>CUIT:</strong> <?php echo $usuario['cuit']; ?></p>
            <p><strong>Usuario:</strong> <?php echo $usuario['usuario']; ?></p>
        </div>
        <button class="volver-btn" onclick="window.history.back()">Volver</button>
    <?php else: ?>
        <p>Usuario no encontrado.</p>
    <?php endif; ?>
</body>
</html>