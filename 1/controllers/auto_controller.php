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
                "img_url" => "https://platform.cstatic-images.com/medium/in/v2/stock_photos/94d0d9e3-8f39-41fa-815e-52a65edb0e4d/e571abff-9e24-49d4-8678-bf834b3f8e72.png"
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
                "img_url" => "https://dealerimages.dealereprocess.com/image/upload/c_limit,f_auto,fl_lossy,w_auto/v1/svp/dep/21kiasportagelx/kia_21sportagelx_angularfront_steelgray"
            ],
            [
                "id" => 4, 
                "marca" => "Isuzu", 
                "modelo" => "D-MAX", 
                "precio" => 93.46, 
                "dias_alquiler" => 4, 
                "precio_pagar" => 373.84, 
                "img_url" => "https://isuzu.gt/wp-content/uploads/2021/03/tql0025.png"
            ],
            [
                "id" => 5, 
                "marca" => "Chevrolet", 
                "modelo" => "Traiblazer", 
                "precio" => 74.76, 
                "dias_alquiler" => 7, 
                "precio_pagar" => 523.32, 
                "img_url" => "https://avanta-avto-credit.ru/upload/iblock/143/143bf1dad61d47996754f8034cb30ffa.png"
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