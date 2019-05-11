<?php

    class Postulantes extends Controller{

        public function __construct(){
            if(!($_SESSION['user_rol']==4)){
                redirect('users/login');
            }

            $this->postModel= $this->model('Postulante');
        }

        public function index(){

            $posts=$this->postModel->getPosts();
            $data=['posts' => $posts,
                   'area' => '',
                   'descripcion' => '',  
                    'area_err' => '',
                    'descripcion_err' => '', 
                ];

            $this->view('postulantes/index', $data);
        }

        public function offers(){

            $posts=$this->postModel->getPosts();
            $data=['posts' => $posts,
                   'area' => '',
                   'descripcion' => '',  
                    'area_err' => '',
                    'descripcion_err' => '', 
                ];

            $this->view('postulantes/index', $data);
        }

        public function postular($id){

            if($_SERVER['REQUEST_METHOD']=='POST'){
                 
                $id_usuario=$_SESSION['user_id'];
                $data=[
                    'id_usuario' => $id_usuario,
                    'id_oferta' => $id,
                   'disponibilidad' => $_POST['disponibilidad'],
                   'viajar' => $_POST['viajar'],  
                   'descripcion' => $_POST['descripcion'],  
                    'disponibilidad_err' => '',
                    'viajar_err' => '',
                    'descripcion_err' => '',
                    'id_post'=>$id 
                ];
                $this->postModel->postular($data);


                $this->index();
            }
            else{
                $posts=$this->postModel->getPosts();
                $data=['posts' => $posts,
                   'disponibilidad' => '',
                   'viajar' => '',  
                   'descripcion' => '',  
                    'disponibilidad_err' => '',
                    'viajar_err' => '',
                    'descripcion_err' => '',
                    'id_post'=>$id 
                ];

                $this->view('postulantes/postular', $data);
            }

        }

        public function editCv(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                 
                $id_usuario=$_SESSION['user_id'];
                $data=[
                    'id_usuario' => $id_usuario,
                    'nombres' => $_POST['nombres'],
                    'apellidos' => $_POST['apellidos'],
                    'direccion' => $_POST['direccion'],
                    'telefono' => $_POST['telefono'],
                    'email' => $_POST['email'],
                    'Cedula' => $_POST['cedula'],
                   'Nacionalidad' => $_POST['nacionalidad'],
                   'Experiencia' => $_POST['experiencia'],  
                   'Educacion' => $_POST['educacion'],  
                   'nombres_error' => '',
                   'apellidos_error' => '',
                   'direccion_error' => '',
                   'telefono_error' => '',
                   'email_error' => '',
                   'Cedula_error' => '',
                  'Nacionalidad_error' => '',
                  'Experiencia_error' => '',  
                  'Educacion_error' => ''
                ];
                $this->postModel->ActualizarCv($data);


                $this->index();
            }
            else{

                $id_usuario=$_SESSION['user_id'];

                $info=$this->postModel->getCurriculum($id_usuario);


                echo $id_usuario;
                $data=[
                    'nombres' => $info[0]->nombres,
                    'apellidos' => $info[0]->apellidos,
                    'direccion' => $info[0]->direccion,
                    'telefono' => $info[0]->telefono,
                    'email' => $info[0]->email,
                    'cedula' => $info[0]->Cedula,
                   'nacionalidad' => $info[0]->Nacionalidad,
                   'experiencia' => $info[0]->Experiencia,  
                   'educacion' => $info[0]->Educacion, 
                   'nombres_error' => '',
                   'apellidos_error' => '',
                   'direccion_error' => '',
                   'telefono_error' => '',
                   'email_error' => '',
                   'Cedula_error' => '',
                  'nacionalidad_error' => '',
                  'experiencia_error' => '',  
                  'educacion_error' => ''
                ];

                $this->view('postulantes/curriculum', $data);
            }
        }

}