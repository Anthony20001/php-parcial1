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
    <title>Title</title>
</head>

<body>
    <div class="container">
        <h1>Parcial N° 1 - Enunciado 4</h1>

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
                    <th scope="col">
                        Más información
                    </th>
                </tr>
            </thead>
            <tbody class="table-light">
                <?php
                    $obj = new Auto_Controller();
                    echo var_dump($obj->index()[0]['id'])."<br>"."<br>";
                    foreach($obj->index() as $key){
                        echo
                            '<tr>'.
                                '<th>'.$key['id'].'</th>'.
                                '<td>'.$key['marca'].'</td>'.
                                '<td>'.$key['modelo'].'</td>'.
                                '<td>'.$key['precio'].'</td>'.
                                '<td>'.$key['dias_alquiler'].'</td>'.
                                '<td>'.$key['marca'].'</td>'.
                                '<td>'.$key['marca'].'</td>'.
                            '</tr>';
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>