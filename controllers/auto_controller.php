<?php

    class Auto_Controller{

        private $inventario = 
        [
            [
                "id" => 1, 
                "marca" => "Hyundai", 
                "modelo" => "Accent", 
                "precio" => 46.72, 
                "dias_alquiler" => 7, 
                "precio_pagar" => 327.04, 
                "img_url" => "https://img2.freepng.es/20180323/daw/kisspng-2018-hyundai-accent-2010-hyundai-accent-2011-hyund-hyundai-5ab52d9d006cb5.9802120915218231330017.jpg"
            ],
            [
                "id" => 2, 
                "marca" => "Toyota", 
                "modelo" => "Rush", 
                "precio" => 74.76, 
                "dias_alquiler" => 2, 
                "precio_pagar" => 149.52, 
                "img_url" => "https://i0.wp.com/www.deagenciapanama.com/wp-content/uploads/2019/11/Ru5h-2022.png?resize=798%2C466&ssl=1"
            ],
            [
                "id" => 3, 
                "marca" => "Kia", 
                "modelo" => "Sportage", 
                "precio" => 70.08, 
                "dias_alquiler" => 5, 
                "precio_pagar" => 350.4, 
                "img_url" => "https://www.kindpng.com/picc/m/45-451883_new-2020-kia-sportage-ex-mazda-cx-5.png"
            ],
            [
                "id" => 4, 
                "marca" => "Isuzu", 
                "modelo" => "D-MAX", 
                "precio" => 93.46, 
                "dias_alquiler" => 4, 
                "precio_pagar" => 373.84, 
                "img_url" => "https://www.isuzupanama.com.pa/content/20210630134627-1.jpg"
            ],
            [
                "id" => 5, 
                "marca" => "Chevrolet", 
                "modelo" => "Captiva", 
                "precio" => 74.76, 
                "dias_alquiler" => 7, 
                "precio_pagar" => 523.32, 
                "img_url" => "https://www.chevrolet.com.pa/captiva2021_files/2022-captiva-blanco-v2.jpg?imwidth=960"
            ]
        ];

        public function index(){
            return $this->inventario;
        }
        
        public function create(){

        }

        public function delete(){

        }

        public function update(){

        }
    }
    ?>