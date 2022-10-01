<?php
    class Auto{
    
        private $id, $marca, $modelo, $precio, $dias_alquiler, $precio_pagar, $foto;
        
        public function __construc(){
        }

        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            return $this->id;
        }


        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }


        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }


        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }


        public function getDias_alquiler(){
            return $this->dias_alquiler;
        }

        public function setDias_alquiler($dias_alquiler){
            return $this->dias_alquiler = $dias_alquiler;
        }


        public function getprecio_pagar(){
            return $this->precio_pagar;
        }

        public function setPrecio_pagar($precio_pagar){
            return $this->precio_pagar = $precio_pagar;
        }


        public function getFoto(){
            return $this->foto;
        }

        public function setFoto($foto){
            return $this->foto = $foto;
        }
    }

?>