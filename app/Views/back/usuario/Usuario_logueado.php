    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
       /* Estilo para el párrafo */
       p {
            color: blue; /* Cambia el color del texto a azul */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: pink;
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

        /* Estilo para el footer */
        footer {
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        .destacado {
            font-weight: bold;
            color: #007bff;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>
            <?php if(session()->getFlashdata("msg")):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata("msg")?>
                </div>
            <?php endif;?>
            <?php if(session()->perfil_id == 1): ?>
                <div>
                    <img class="center" height="200px" width="200px" src="<?php echo base_url('/assets/img/Yanina.jpg');?>">
                </div>
            <?php elseif(session()->perfil_id == 2): ?>
                <div>
                    <img class="center" height="200px" width="200px" src="<?php echo base_url('/assets/img/imagenPrueba.jpg');?>">
                </div>
            <?php endif;?>
        </div>
    </div>
</div>

<!-- INICIO DE ENCABEZADO -->
<header>
    <div class="container" style="background-color: blue;">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Bienvenidos</h1>
                <h1>Empresa Formis</h1>
                <h1>Lideres de Productos</h1> 
            </div>
        </div>
    </div>
</header>
<!-- FIN DE ENCABEZADO -->

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> </script>