<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Banca en Línea</title>
</head>

<body style="background-color: #130C7A">
    <style>
    .button1 {
        background-color: #2295D1;
        color: white;
        cursor: pointer;
        border-radius: 20px;
        border: none;
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 500;
        margin-right: 10px;
    }

    .button2 {
        background-color: #1B70B7;
        color: white;
        cursor: pointer;
        border-radius: 20px;
        border: none;
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 500;
    }

    .card2 {
        border-radius: 10px;
        padding: 8px;
        border: solid grey 1px;
        margin-left: 30px;
        position: absolute;
        z-index: 1;
        margin-top: 130px;
        width: 210px;
    }

    .celular {
        border-radius: 10px;
        border: solid black 15px;
        width: 300px;
        height: 540px;
        background-color: white;
        padding: 15px;
        border-bottom: solid black 40px;
    }
    </style>
    <div class="container-fluid" height: 100%;">
        <nav class="d-flex p-4 justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="./public/img/dinero_nav.png" alt="" width="50" height="50" style="margin-right: 15px;">
                <h5 class="text-white">Banco Imperial</h5>
            </div>
            <div>
                <button class="button1">
                    Crear Dispositivo
                </button>
                <button class="button2">
                    Descargar App
                </button>
            </div>
        </nav>

        <div class="row mt-3">
            <div class="d-block">
                <h4 class="text-center text-white mb-4">Banca en Línea</h4>
                <img src="./public/img/dinero_body.png" alt="" width="90" height="90" class="d-block mx-auto">
            </div>
        </div>


        <div class="row mt-5 d-flex justify-content-center align-items-center">

            <div class="col-3 mx-auto align-items-center">
                <div class="celular">
                    <img src=" ./public/img/dinero_nav.png" alt="" width="45" height="45" class="mb-2 d-block mx-auto">
                    <h6 class="text-center fw-bold">Banco Imperial</h6>
                    <h6 class="mt-3">Bienvenido, Anthony</h6>

                    <div class="body_celular">
                        <p class="text-primary mt-4">Cuentas</p>

                        <div style="overflow:scroll">
                            <div class="card" style="width: 15rem; height: 5rem;">
                                <div class="card-body">
                                    <h6 class="card-title" id="cuenta_nombre">Cuenta de Ahorros</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="card-text text-secondary" style="font-size: 13px;" id="cuenta_numero">
                                            04-42-98-14341-1</p>
                                        <h6 class="text-primary fw-bold cuenta_saldo" id="">$158.43</h6>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <?php 
                            if(isset($_GET['cuenta_nombre']) && isset($_GET['cuenta_numero']) && isset($_GET['cuenta_saldo'])){
                                include_once "controllers/cuenta_controller.php";

                                $obj_controller = new Cuenta_Controller();
                                $obj_controller->crear_cuenta(
                                    $_GET['cuenta_nombre'], 
                                    $_GET['cuenta_numero'], 
                                    $_GET['cuenta_saldo']);
                                
                                foreach($obj_controller->mostrar_cuentas() as $key){
                                    echo 
                                '<div class="card d-grid gap-4" style="width: 15rem; height: 5rem;">
                                    <div class="card-body" id="cuenta_card">
                                        <h6 class="card-title cuenta_nombre" id="">'.$key['cuenta_nombre'].'</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-text text-secondary cuenta_numero" style="font-size: 13px;" id="">'.
                                            $key['cuenta_numero'].
                                            '</p>
                                            <h6 class="text-primary fw-bold cuenta_saldo" id="">$'.$key['cuenta_saldo'].'</h6>
                                        </div>
                                    </div>
                                </div>';
                                }
                            }
                        ?>
                            </div>
                        </div>



                        <div class="d-block align-items-end">
                            <button class="btn btn-outline-primary mt-5 w-100 btn_crear_cuenta" id="">Crear
                                cuenta</button>
                            <button class="btn_transferir btn btn-primary text-white w-100 mt-2"
                                id="">Transferir</button>
                        </div>

                    </div>


                    <div class="body_transferencia" style="display: none;">
                        <h6 class="text-primary text-center mt-5 mb-4">Transferencia</h6>

                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Cuenta a debitar</option>
                            <option value="1">Cuenta de Ahorros</option>
                        </select>

                        <input type="number" name="" id="" placeholder="Enviar a" class="form-control mt-3">
                        <input type="number" name="" id="cantidad_dinero" class="w-100 mt-3 form-control"
                            placeholder="Monto $0.00">

                        <button class="btn btn-outline-success w-100 mt-5 transferencia_btn_enviar">Enviar</button>
                    </div>


                    <div class="body_transferencia" style="display: none;">
                        <h6 class="text-primary text-center mt-5 mb-4">Transferencia</h6>

                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Cuenta a debitar</option>
                            <option value="1">Cuenta de Ahorros</option>
                        </select>

                        <input type="number" name="" id="" placeholder="Enviar a" class="form-control mt-3">
                        <input type="number" name="" id="cantidad_dinero" class="w-100 mt-3 form-control"
                            placeholder="Monto $0.00">

                        <button class="btn btn-outline-success w-100 mt-5 transferencia_btn_enviar">Enviar</button>
                    </div>


                    <div class="body_crear_cuenta" style="display: none;">
                        <h6 class="text-primary text-center mt-5 mb-4">Crear cuenta</h6>
                        <form action="index.php" method="get">
                            <input type="text" placeholder="Nombre de la cuenta" class="form-control mb-3"
                                name="cuenta_nombre">
                            <input type="text" placeholder="Número de la cuenta" class="form-control mb-5"
                                name="cuenta_numero">
                            <input type="hidden" placeholder="Número de la cuenta" class="form-control mb-5"
                                value="0.00" name="cuenta_saldo">
                            <button class="btn btn-outline-primary w-100 mt-5 cuenta_btn_crear">Crear</button>
                        </form>
                        <!-- Button trigger modal -->
                    </div>
                </div>
            </div>


            <div class="col-1 mx-auto align-items-center">
                <img src="./public/img/transferir.png" alt="" width="90" height="90">
            </div>


            <div class="col-3 mx-auto align-items-center">
                <div class="celular" id="container_celular">
                    <img src="./public/img/dinero_nav.png" alt="" width="45" height="45" class="mb-2 d-block mx-auto">
                    <h6 class="text-center fw-bold">Banco Imperial</h6>
                    <h6 class="mt-3">Bienvenido, Uriel</h6>

                    <div class="body_celular">
                        <p class="text-primary mt-4">Cuentas</p>
                        <div class="card" style="width: 15rem; height: 5rem;">
                            <div class="card-body">
                                <h6 class="card-title" id="cuenta_nombre">Cuenta de Ahorros</h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text text-secondary" style="font-size: 13px;" id="cuenta_numero">
                                        04-42-98-14341-1</p>
                                    <h6 class="text-primary fw-bold cuenta_saldo" id="">$158.43</h6>
                                </div>
                            </div>
                            <div class="d-block mt-5">
                                <button class="btn btn-outline-primary mt-5 w-100 btn_crear_cuenta" id="">Crear
                                    cuenta</button>
                                <button class="btn btn-primary text-white w-100 mt-2 btn_transferir"
                                    id="">Transferir</button>
                            </div>
                        </div>
                    </div>


                    <div class="body_transferencia" style="display: none;">
                        <h6 class="text-primary text-center mt-5 mb-4">Transferencia</h6>

                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Cuenta a debitar</option>
                            <option value="1">Cuenta de Ahorros</option>
                        </select>

                        <input type="number" name="" id="" placeholder="Enviar a" class="form-control mt-3">
                        <input type="number" name="" id="cantidad_dinero" class="w-100 mt-3 form-control"
                            placeholder="Monto $0.00">

                        <button class="btn btn-outline-success w-100 mt-5 transferencia_btn_enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>




</body>

</html>