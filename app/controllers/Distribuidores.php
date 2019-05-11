<?php

    class Distribuidores extends Controller{

        public function __construct(){
            if(!($_SESSION['user_rol']==2)){
                redirect('users/login');
            }

            $this->postModel= $this->model('Distribuidor');
        }

        public function index(){

            $libros=$this->postModel->getLibros();
           

            $data=[
                   'libros'=> $libros,
                   'observaciones' => '',
                   'descripcion' => '',  
                    'stock' => '',
                    'cantidad' => '', 
                    'total' => '',
                    'subtotal' => ''
                ];

            $this->view('distribuidores/index', $data);
        }



    }