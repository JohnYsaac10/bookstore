<?php

    class Admins extends Controller{

        public function __construct(){
            if(!($_SESSION['user_rol']==1)){
                redirect('users/login');
            }

            $this->postModel= $this->model('Admin');
        }

        public function index(){

            $posts=$this->postModel->getPosts();
            $data=['posts' => $posts,
                   'area' => '',
                   'descripcion' => '',  
                    'area_err' => '',
                    'descripcion_err' => '', 
                ];

            $this->view('admins/index', $data);
        }

        public function createUser(){

            $rols=$this->postModel->getRoles();
            
            $data = [
                'rols' => $rols,
                'name' => '',
                'surname' => '',
                'adress' => '',
                'phone' => '',
                'email' => '',
                'username' => '',
                'password'=> '',
                'confirm_password'=> '',  
                'name_err' => '',
                'surname_err' => '',
                'adress_err' => '',
                'phone_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err'=> '',
                'confirm_password_err'=> ''   
            ];

            $this->view('users/register', $data);
        }



        public function post(){
            $data=[ 'area' => trim($_POST['area']),
                   'descripcion' => trim($_POST['descripcion']),  
                    'area_err' => '',
                    'descripcion_err' => '', 
            ];

            $this->postModel->post($data);

            $this->index();

        }

        public function eliminarPost($data){
            $this->postModel->eliminarPost($data);
            $this->index();
        }

        public function createItem(){

            $tematica=$this->postModel->getTematicas();

            if($_SERVER['REQUEST_METHOD']=='POST'){


                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'ISBN' => trim($_POST['ISBN']),
                    'titulo' => trim($_POST['titulo']),
                    'autor' => trim($_POST['autor']),
                    'tematica' =>  trim($_POST['tematica']),  
                    'descripcion' => trim($_POST['descripcion']),
                    'editorial' => trim($_POST['editorial']),
                    'yearOfPublication' =>  trim($_POST['yearOfPublication']),
                    'nPages' => trim($_POST['nPages']),
                    'edicion' => trim($_POST['edicion']),
                    'pvp' =>  trim($_POST['pvp']),
                    'estanteria' => trim($_POST['estanteria']),
                    'temas'=> $tematica,
                    'ISBN_err' => '',
                    'titulo_err' => '',
                    'autor_err' => '',
                    'tematica_err' =>  '',  
                    'descripcion_err' => '',
                    'editorial_err' => '',
                    'yearOfPublication_err' =>  '',
                    'nPages_err' => '',
                    'edicion_err' => '',
                    'pvp_err' =>  '',
                    'estanteria_err' => ''
                ];


                $this->postModel->createItem($data);
                
                //$this->createItem();
                $data = [
                    'ISBN' => '',
                    'titulo' => '',
                    'autor' => '',
                    'tematica' =>  '',  
                    'descripcion' => '',
                    'editorial' => '',
                    'yearOfPublication' =>  '',
                    'nPages' => '',
                    'edicion' => '',
                    'pvp' =>  '',
                    'estanteria' => '',
                    'temas'=> $tematica,
                    'ISBN_err' => '',
                    'titulo_err' => '',
                    'autor_err' => '',
                    'tematica_err' =>  '',  
                    'descripcion_err' => '',
                    'editorial_err' => '',
                    'yearOfPublication_err' =>  '',
                    'nPages_err' => '',
                    'edicion_err' => '',
                    'pvp_err' =>  '',
                    'estanteria_err' => ''
                ];
                $this->view ('admins/createItem', $data);

            }
            else{
                $data = [
                    'ISBN' => '',
                    'titulo' => '',
                    'autor' => '',
                    'tematica' =>  '',  
                    'descripcion' => '',
                    'editorial' => '',
                    'yearOfPublication' =>  '',
                    'nPages' => '',
                    'edicion' => '',
                    'pvp' =>  '',
                    'estanteria' => '',
                    'temas'=> $tematica,
                    'ISBN_err' => '',
                    'titulo_err' => '',
                    'autor_err' => '',
                    'tematica_err' =>  '',  
                    'descripcion_err' => '',
                    'editorial_err' => '',
                    'yearOfPublication_err' =>  '',
                    'nPages_err' => '',
                    'edicion_err' => '',
                    'pvp_err' =>  '',
                    'estanteria_err' => ''
                ];

                $this->view ('admins/createItem', $data);
            }
        }


        public function viewPostulants(){

            $posts = $this->postModel->getPostulantes();

            $data = [
                'posts' => $posts,
            ];
            $this->view ('admins/postulantes', $data);

        }





    }

?>