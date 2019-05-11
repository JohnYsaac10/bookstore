<?php
  

    class Admin{
        private $db;
        public function __construct(){
          
            $this->db= new Database();
            
        }

        public function getPosts(){
            $this->db->query('SELECT * FROM ofertas');

            $result= $this->db->resultSet();

            return $result;
        }

        public function getRoles(){
            $this->db->query('SELECT * FROM rol');
            
            $result= $this->db->resultSet();

            return $result;
        }

        public function getTematicas(){
            $this->db->query('SELECT * FROM temas');
            
            $result= $this->db->resultSet();

            return $result;
        }

        public function post($data){

            $this->db->query('INSERT INTO ofertas (Area, Descripcion) VALUES (:area, :descripcion)');
            $this->db->bind(':area', $data['area']);
            $this->db->bind(':descripcion', $data['descripcion']);

                if($this->db->execute()){
                   return true;
                }else {
                  return false;
                }
        }

        public function eliminarPost($data){

            $this->db->query('DELETE FROM ofertas WHERE id = :id');
            $this->db->bind(':id', $data[0]);

            if($this->db->execute()){
                return true;
             }else {
               return false;
             }
        }
         

        public function createItem($data){

            $this->db->query('INSERT INTO libro (Nombre, Autor, ISBN, Cantidad) VALUES (:name, :autor, :ISBN, :cantidad)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':autor', $data['autor']);
            $this->db->bind(':ISBN', $data['ISBN']);
            $data['cantidad']=(int)$data['cantidad'];
            $this->db->bind(':cantidad', $data['cantidad']);

                if($this->db->execute()){
                   return true;
                }else {
                  return false;
                }
        }


        public function getPostulantes(){

            $this->db->query("SELECT Pt.disponibilidad, Pt.viajar, Pt.descripcion, Pt.fecha, O.Area, P.telefono, P.email, CONCAT(P.nombres, ' ', P.apellidos) as nombres FROM postulaciones AS Pt INNER JOIN usuario AS U ON Pt.id_usuario=U.id INNER JOIN persona as P ON U.idPersona=P.id INNER JOIN ofertas as O ON Pt.id_oferta=O.id");

            $result= $this->db->resultSet();

            return $result;
        }

    }

?>