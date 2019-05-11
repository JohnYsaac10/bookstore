<?php
  

    class Postulante{
        private $db;
        public function __construct(){
          
            $this->db= new Database();
            
        }

        public function getPosts(){
            $this->db->query('SELECT * FROM ofertas');

            $result= $this->db->resultSet();

            return $result;
        }

        public function postular($data){

            $this->db->query('INSERT INTO postulaciones (id_usuario, id_oferta, disponibilidad, viajar, descripcion) VALUES(:id_usuario, :id_oferta, :disponibilidad, :viajar, :descripcion)');
            
            $this->db->bind(':id_usuario', $data['id_usuario']);
            $this->db->bind(':id_oferta', $data['id_oferta']);
            $this->db->bind(':disponibilidad', $data['disponibilidad']);
            $this->db->bind(':viajar', $data['viajar']);
            $this->db->bind(':descripcion', $data['descripcion']);
        
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function getCurriculum($id){
            $this->db->query('SELECT P.nombres, P.apellidos, P.direccion, P.telefono, P.email, U.Cedula, U.Nacionalidad, U.Experiencia, U.Educacion FROM usuario AS U INNER JOIN persona AS P ON U.idPersona=P.id WHERE U.id=:id_usuario');
            $this->db->bind(':id_usuario', $id);

            $result= $this->db->resultSet();

            return $result;
        }

        public function ActualizarCv($data){
            //actualiza usuarios
            $this->db->query('UPDATE usuario AS U SET Cedula=:cedula, Nacionalidad=:nacionalidad, Experiencia=:experiencia, Educacion=:educacion  WHERE U.id=:id_usuario');
           
            $this->db->bind(':cedula', $data['Cedula']);
            $this->db->bind(':nacionalidad', $data['Nacionalidad']);
            $this->db->bind(':experiencia', $data['Experiencia']);
            $this->db->bind(':educacion', $data['Educacion']);
            $this->db->bind(':id_usuario', (int)$data['id_usuario']);

       
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        
    }