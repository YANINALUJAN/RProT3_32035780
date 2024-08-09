    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        

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

        
    </style>
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acercade">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registrarse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Autoridades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cards">Responsables</a></li>
                  <li><a class="dropdown-item" href="#"> Cronograma de la empresa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Eventos
                  </a></li>
                </ul>
              </li>

              <!-- Esto se agrego para que el usuario logueado vea la opcion Usuarios -->
              <?php if (isset($_SESSION['perfil_id']) && $_SESSION['perfil_id'] == 1) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="listado_usuario">Listado</a></li>
                            <li><a class="dropdown-item" href="crearusuario">Crear</a></li>
                        </ul>
                    </li>
                    <script src="assets/js/bootstrap.bundle.min.js"></script>
                    <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <!-- Mostrar Logout si el usuario está logueado -->
            <?php if (isset($_SESSION['perfil_id'])) : ?>
                <a href="<?php echo base_url("/logout");?>" class="btn btn-outline-light ms-2">Logout</a>
                <?php endif; ?>
          </div>
        </div>
      </nav>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
    
   