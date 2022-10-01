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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Mostrar</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Parcial N° 1 - Enunciado 4</h1>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marca de auto</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Días de alquiler</th>
                    <th scope="col">Precio a pagar</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                    $obj = new Auto_Controller();
                    //echo var_dump($obj->index()[0]['id'])."<br>"."<br>";

                    if(isset($_GET['id'])){
                        $id = $_GET['id'] - 1;
                        $auto = $_SESSION['inventario'];
                        
                        //var_dump($_SESSION['inventario'][$index]['id']);
                        
                        echo
                        '<tr">'.
                            '<td>'.$auto[$id]['id'].'</td>'.
                            '<td>'.$auto[$id]['marca'].'</td>'.
                            '<td>'.$auto[$id]['modelo'].'</td>'.
                            '<td>'.$auto[$id]['precio'].'</td>'.
                            '<td>'.$auto[$id]['dias_alquiler'].'</td>'.
                            '<td>'.$auto[$id]['precio_pagar'].'</td>'.
                            '<td>'.' <img src="'.$auto[$id]['img_url'].'" alt="" width="150" height="100">'.'</td>'.
                        '</tr>';
                    }
                ?>

            </tbody>

        </table>

        <div class="row">
            <div class="col-12">
                <a href="index.php" class="btn btn-success">Volver</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>