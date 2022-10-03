<?php

class Cuenta_Model{
    private $cuenta_nombre, $cuenta_numero, $cuenta_saldo;

    public function setNombre($cuenta_nombre){
        $this->cuenta_nombre = $cuenta_nombre;
    }

    public function getNombre(){
        return $this->cuenta_nombre;
    }

    public function setCuentaNumero($cuenta_numero){
        $this->cuenta_numero = $cuenta_numero;
    }

    public function getCuentaNumero(){
        return $this->cuenta_numero;
    }

    public function setCuentaSaldo($cuenta_saldo){
        $this->cuenta_saldo = $cuenta_saldo;
    }

    public function getCuentaSaldo(){
        return $this->cuenta_saldo;
    }
}