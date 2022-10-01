<?php 
    session_start();
    include_once "controllers/auto_controller.php";
    include_once "models/auto_model.php"
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e777bb77a8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="">
        <!-- Navbar================================================================================ -->
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Alquila ya!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Contacto
                            </a>

                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>


            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.toyota.com.gt/hubfs/Imagenes_optimizadas/toyota-rush-banner-diseno-1920x1000-optimizada.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://carsguide-res.cloudinary.com/image/upload/f_auto%2Cfl_lossy%2Cq_auto%2Ct_default/v1/editorial/kia-sportage-gt-line-my20-tw-1001x565-%281%29.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.elcarrocolombiano.com/wp-content/uploads/2019/05/20190530-CHEVROLET-TRAILBLAZER-2021-NORTEAMERICA-01.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="row mt-3 d-flex justify-content-between p-4">

            <div class="col-2 d-block">
                <h2 class="text-center mt-3 mb-4">Filtros</h2>
                <form action="index.php" method="get" class="mb-2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled="true">Precio</option>
                        <option value=" 1">Ascendente</option>
                        <option value="2">Descendente</option>
                    </select>
                </form>

                <form action="index.php" method="get">
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled="true">Marca</option>
                        <option value=" 1">Toyota</option>
                        <option value="2">Hyundai</option>
                        <option value="3">Izusu</option>
                    </select>
                </form>
            </div>



            <div class="col-9">
                <h2 class="text-center mt-3 mb-4">Inventario</h2>

                <div class="d-flex justify-content-between">
                    <?php
                        $obj = new Auto_Controller();
                        //echo var_dump($obj->index()[0]['id'])."<br>"."<br>";
    
                        $_SESSION['inventario'] = $obj->index();
                        
                        foreach($obj->index() as $key){

                            echo '<div class="d-block">
                
            </div>';
                            echo var_dump($obj->index()->getId());
                                
                        }
                    ?>


                    <div class="card" style="width: 13rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marca + Modelo</h5>
                            <p class="card-text">Some quick example text to build .</p>
                        </div>
                    </div>

                    <div class="card" style="width: 13rem;">
                        <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marca + Modelo</h5>
                            <p class="card-text">Some quick example text to build .</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <style>
    body {
        width: 100%;
        margin: 0;
    }
    </style>
</body>

</html>