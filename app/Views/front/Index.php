    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
       h1 { text-align: center;
        }
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

        /* Asegurarse de que las imágenes del carrusel tengan el tamaño correcto */
        .carousel-inner img {
            width: 100%;
            height: auto;
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
    </style>
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>
       <header>
        <div class="Container" style="background-color:rgba(25, 15, 209, 0.959);"div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <h1> Bienvenidos </h1>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1> Empresa Formi </h1> 
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>  Lideres de productos </h1>       
        </div>
        <div class="image-container" style="text-align: center;">
<img src="assets\img\imagenPrueba.jpg" alt="imagenPrueba">
      </div>
    </header>
    <nav class="text-center my-3"> 
        <ul class="d-inline-block">
        <li> <a href="https://www.google.com/?hl=es ">Google</a> </li>
        <li> <a href="https://login.yahoo.com/ ">Yahoo</a> </li>
        <li> <a href=" https://talentosdigitales.ar/ ">Talentos Digitales</a> </li>
    </ul>
    </nav>
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2>Formulario de Productos</h2>
                <form>
                    <div class="mb-3">
                        <label for="Nombre del Producto" class="form-label">Productos</label>
                        <input type="text" class="form-control" id="Nombre del Producto" placeholder="productos">
                      </div>
                      <div class="mb-3">
                        <label for="descripcion" class="form-label">descripcion</label>
                        <textarea class="form-control" id="descripcion" rows="3"></textarea>
                      </div>  
                      <div class="mb-3">
                        <label for="productos" class="form-label">numero de Productos</label>
                        <input type="number" class="form-control" id="Productos"/>
                      </div>
                      <div class="d-grid gap-2">
                      <button class="btn btn-success">Guardar</button>    
                      <button class="btn btn-light">limpiar</button>
                    </div> 
                     
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h2> Listados de Productos</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>productos</th>
                            <th>cantidad de productos de limpieza</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>lavandina</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>detergente</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>desodorante</td>
                                <td>350</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>difusores</td>
                                <td>450</td>
                            </tr>
                        </tbody>
                    </thead>
                </table>
            </div>

        </div>
    
     <div class="div1">
    <p class="p1"> 
         </p>
         
   </div>
   <div class="carousel-container my-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/imagenPrueba1.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto" alt="imagenPrueba1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/imagenPrueba2.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto" alt="imagenPrueba2">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/imagenPrueba3.jpg"class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-block w-50 mx-auto"  alt="imagenPrueba3">
                </div>
            </div>
        </div>
    </div>
 <script src="assets/js/bootstrap.bundle.min.js"> </script>
</body>