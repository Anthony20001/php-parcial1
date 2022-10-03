<?php
session_start();
class Cuenta_Controller{
    private $cuenta_nombre, $cuenta_numero, $cuenta_dinero, $cuenta_numero_destino, 
    $cuentas = [];
    
    /*[
        ["cuenta_nombre" => "Cuenta de Ahorros", "cuenta_numero" => "05-54-23-52415-2", "cuenta_saldo" => 99.54]
    ];*/

    public function __construct(){
        
    }

    public function mostrar_cuentas(){
        return $this->cuentas;
    }

    public function crear_cuenta($cuenta_nombre, $cuenta_numero, $cuenta_saldo){
        array_push($this->cuentas, [
            "cuenta_nombre" => $cuenta_nombre, 
            "cuenta_numero" => $cuenta_numero, 
            "cuenta_saldo" => $cuenta_saldo
        ]);
    }

    public function transferir_dinero(){
        return 
            '
                <script>
                window.onload = () => {
                    var container_celular = document.getElementById("container_celular");
                    container_celular.style.display = "none";
                    alert("");
                }
                </script>
            ';
    }

    
}